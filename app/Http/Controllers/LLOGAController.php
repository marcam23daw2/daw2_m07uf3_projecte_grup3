<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\LLOGA;
use Illuminate\Http\Request;


class LLOGAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_LLOGA = LLOGA::all();
        return view('llista_lloga', compact('dades_LLOGA'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea_lloga');
    }

    public function store(Request $request)
    {
        $nouLloga = $request->validate([
            'dni_client' => 'required',
            'matricula_auto' => 'required',
            'data_prestec' => 'required',
            'data_devolucio' => 'required',
            'lloc_devolucio' => 'required',
            'preu_dia' => 'required',
            'prestec_retorn_diposit_ple' => 'required',
            'tipus_asseguranca' => 'required'
        ]);

        $lloga = LLOGA::create($nouLloga);
        return view('dashboard_lloga');
    }

    /**
     * Display the specified resource.
     */
    public function show(LLOGA $lLOGA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($dni_client, $matricula_auto)
    {
        $dades_LLOGA = LLOGA::where('dni_client', $dni_client)->where('matricula_auto', $matricula_auto)->firstOrFail();
        return view('actualitza_lloga', compact('dades_LLOGA'))->with('readonly', true);
    }
    

    public function update(Request $request, $dni_client, $matricula_auto)
    {
        $noves_dades_LLOGA = $request->validate([
            'dni_client' => 'required',
            'matricula_auto' => 'required',
            'data_prestec' => 'required',
            'data_devolucio' => 'required',
            'lloc_devolucio' => 'required',
            'preu_dia' => 'required',
            'prestec_retorn_diposit_ple' => 'required',
            'tipus_asseguranca' => 'required'
        ]);

        $lloga = LLOGA::where('dni_client', $dni_client)->where('matricula_auto', $matricula_auto)->firstOrFail();

        // Llama al método update en la instancia del modelo
        $lloga->update($noves_dades_LLOGA);

        return view('dashboard_lloga');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($dni_client, $matricula_auto)
    {
        $lloga = LLOGA::where('dni_client', $dni_client)->where('matricula_auto', $matricula_auto)->firstOrFail();
        $lloga->delete();
        return view('dashboard_lloga');
    }

    public function exportPdf($dni_client, $matricula_auto)
    {
        $lloga = LLOGA::where('dni_client', $dni_client)->where('matricula_auto', $matricula_auto)->firstOrFail();
        $pdf = PDF::loadView('pdf/lloga_pdf', compact('lloga'));
        return $pdf->download('lloga_data.pdf');
    }
}
