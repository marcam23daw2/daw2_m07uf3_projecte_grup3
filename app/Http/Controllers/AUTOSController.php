<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\AUTOS;
use Illuminate\Http\Request;

class AUTOSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_AUTOS = AUTOS::all();
        return view('llista_autos', compact('dades_AUTOS'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea_auto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouAuto = $request->validate([
            'matricula_auto' => 'required',
            'numero_bastidor' => 'required',
            'marca' => 'required',
            'model' => 'required',
            'color' => 'required',
            'nombre_places' => 'required',
            'nombre_portes' => 'required',
            'grandaria_maleter' => 'required',
            'tipus_combustible' => 'required'
        ]);

        $auto = AUTOS::create($nouAuto);
        return view('dashboard_autos');
    }

    /**
     * Display the specified resource.
     */
    public function show(AUTOS $aUTOS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($matricula_auto)
    {
        $dades_AUTOS = AUTOS::findOrFail($matricula_auto);
        return view('actualitza_autos', compact('dades_AUTOS'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $matricula_auto)
    {
        $noves_dades_AUTOS = $request->validate([
            'matricula_auto' => 'required',
            'numero_bastidor' => 'required',
            'marca' => 'required',
            'model' => 'required',
            'color' => 'required',
            'nombre_places' => 'required',
            'nombre_portes' => 'required',
            'grandaria_maleter' => 'required',
            'tipus_combustible' => 'required'
        ]);

        AUTOS::findOrFail($matricula_auto)->update($noves_dades_AUTOS);
        return view('dashboard_autos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($matricula_auto)
    {
        $auto = AUTOS::findOrFail($matricula_auto);
        $auto->delete();
        return view('dashboard_autos');
    }

    public function exportPdf($matricula_auto)
    {
        $auto = AUTOS::findOrFail($matricula_auto);
        $pdf = PDF::loadView('pdf/autos_pdf', compact('auto'));
        return $pdf->download('autos_data.pdf');
    }
}
