<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;

class USUARISController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dades_USERS = User::all();
        return view('llista_admin', compact('dades_USERS'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
            'password' => 'required',
            'darrera_hora_dentrada' => 'required',
            'darrera_hora_desortida' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('actualitza_admin',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
            'password' => [
                'required',
                'min:8',            
                'regex:/[a-z]/',     
                'regex:/[A-Z]/',      
                'regex:/[0-9]/',      
                'regex:/[@$!%*#?&]/', 
            ],
        ]);

        $user->update($request->all());

        return view('dashboard_admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return view('dashboard_admin');
    }

    public function exportPdf(User $user)
    {
        $pdf = PDF::loadView('pdf/users_pdf', compact('user'));
        return $pdf->download('user_data.pdf');
    }
}
