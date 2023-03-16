<?php

namespace App\Http\Controllers;

use App\Models\Heroes;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class HeroesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['heroes']=Heroes::paginate(5);
        return view('heroes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('heroes.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        //
        //$datosheroes = request()->all();
        $datosheroes = request()->except('_token');

        if($request->hasFile('foto')){
            $datosheroes['foto']=$request->file('foto')->store('upload','public');

        }

        Heroes::insert($datosheroes);
        return response()->json($datosheroes);
    }

    /**
     * Display the specified resource.
     */
    public function show(Heroes $heroes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $heroes=Heroes::findOrFail($id);
        return view('heroes/edit', compact('heroes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosheroes=request()->except('_token','_method');

        if($request->hasFile('foto')){
            $heroes=Heroes::findOrFail($id);
            Storage::delete('public/'.$heroes->foto);
            $datosheroes['foto']=$request->file('foto')->store('upload','public');

        }
        

        Heroes::where('id','=',$id)->update($datosheroes);

        $heroes=Heroes::findOrFail($id);
        return view('heroes/edit', compact('heroes'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Heroes::destroy($id);
        return redirect('heroes');
    }
}
