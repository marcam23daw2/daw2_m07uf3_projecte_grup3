<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\CLIENTS;
use Illuminate\Http\Request;

class CLIENTSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_CLIENTS = CLIENTS::all();
        return view('llista_clients', compact('dades_CLIENTS'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea_client');
    }

    public function store(Request $request)
    {
        $nouClient = $request->validate([
            'dni_client' => 'required',
            'nom_cognoms' => 'required',
            'edat' => 'required',
            'telefon' => 'required',
            'adreça' => 'required',
            'ciutat' => 'required',
            'pais' => 'required',
            'email' => 'required',
            'numero_permis_conduccio' => 'required',
            'punts' => 'required',
            'tipus_targeta' => 'required',
            'numero_targeta' => 'required'
        ]);

        $client = CLIENTS::create($nouClient);
        return view('dashboard_clients');
    }


    /**
     * Display the specified resource.
     */
    public function show(CLIENTS $cLIENTS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($dni_client)
    {
        $dades_CLIENTS = CLIENTS::findOrFail($dni_client);
        return view('actualitza_clients', compact('dades_CLIENTS'));
    }

    public function update(Request $request, $dni_client)
    {
        $noves_dades_CLIENT = $request->validate([
            'dni_client' => 'required',
            'nom_cognoms' => 'required',
            'edat' => 'required',
            'telefon' => 'required',
            'adreça' => 'required',
            'ciutat' => 'required',
            'pais' => 'required',
            'email' => 'required',
            'numero_permis_conduccio' => 'required',
            'punts' => 'required',
            'tipus_targeta' => 'required',
            'numero_targeta' => 'required'
        ]);

        CLIENTS::findOrFail($dni_client)->update($noves_dades_CLIENT);
        return view('dashboard_clients');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($dni_client)
    {
        $client = CLIENTS::findOrFail($dni_client);
        $client->delete();
        return view('dashboard_clients');
    }

    public function exportPdf($dni_client)
    {
        $client = CLIENTS::findOrFail($dni_client);
        $pdf = PDF::loadView('clients_pdf', compact('client'));
        return $pdf->download('clients_data.pdf');
    }


}
