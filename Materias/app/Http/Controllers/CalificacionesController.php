<?php

namespace App\Http\Controllers;

use App\Models\calificaciones;
use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['calificaciones']=Calificaciones::paginate(5);
        return view('calificaciones.index', $datos );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('calificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosCalificaciones = request()->all();
        $datosCalificaciones = request()->except('_token');
        calificaciones::insert($datosCalificaciones);




        return response()->json($datosCalificaciones);
    }

    /**
     * Display the specified resource.
     */
    public function show(calificaciones $calificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $calificaciones=Calificaciones::findOrFail($id);
        return view('calificaciones.edit', compact('calificaciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosCalificaciones = request()->except(['_token', '_method']);
        calificaciones::where('id', '=', $id)->update($datosCalificaciones);

        $calificaciones=Calificaciones::findOrFail($id);
        return view('calificaciones.edit', compact('calificaciones'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        
        calificaciones::destroy($id);
        return redirect('calificaciones');
    }
}
