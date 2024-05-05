<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();

        if (auth()->user()->role == 'admin') {
            return redirect('dashboard_admin');
        } elseif(auth()->user()->role == 'treballador') {
            $misatge = "L'usuari " . auth()->user()->name . " ha entrat a l'aplicació a " . now();
            $this->enviarMisatge($misatge);
            $this->enviarEmail($misatge);
            return redirect('dashboard');
        } else {
            auth()->logout();
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        if (Auth::guard('web')->user()->role == 'treballador') {
            $misatge = "L'usuari " . Auth::guard('web')->user()->name . " ha sortit de l'aplicació a " . now();
            $this->enviarMisatge($misatge);
            $this->enviarEmail($misatge);
        }

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Send a Telegram message.
     */
    private function enviarMisatge($misatge)
    {
        $telegramToken = env('TELEGRAM_TOKEN');
        $chatId = env('CHAT_ID');

        $response = Http::asForm()->post("https://api.telegram.org/bot{$telegramToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $misatge,
        ]);

        if ($response->failed()) {
            Log::error('Error al enviar el missatge', ['error' => $response->body()]);
        }
    }

    /**
     * Send an email.
     */
    private function enviarEmail($misatge)
    {
        $email = env('EMAIL');

        Mail::raw($misatge, function ($mail) use ($email) {
            $mail->from('no-reply@yourapp.com');
            $mail->to($email);
            $mail->subject('Notificació d\'entrada/sortida de l\'aplicació');
        });
    }
}
