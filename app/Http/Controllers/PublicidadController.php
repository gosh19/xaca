<?php

namespace App\Http\Controllers;

use App\Publicidad;
use Illuminate\Http\Request;

class PublicidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */
    public function show(Publicidad $publicidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicidad $publicidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicidad $publicidad)
    {
        $publicidad = Publicidad::find($request['id']);

        if($request['publi'] == 1){
          $file = $request->file('fichero1');
          $name = $file->store('publicidad');
          $publicidad->publi1 = '/storage/' . $name;
          $publicidad->save();
          return redirect('/agregar');
        }

        if($request['publi'] == 2){
          $file = $request->file('fichero2');
          $name = $file->store('publicidad');
          $publicidad->publi2 = '/storage/' . $name;
          $publicidad->save();
          return redirect('/agregar');
        }

        if($request['publi'] == 3){
          $file = $request->file('fichero3');
          $name = $file->store('publicidad');
          $publicidad->publi3 = '/storage/' . $name;
          $publicidad->save();
          return redirect('/agregar');
        }

        if($request['publi'] == 4){
          $file = $request->file('fichero4');
          $name = $file->store('publicidad');
          $publicidad->publi4 = '/storage/' . $name;
          $publicidad->save();
          return redirect('/agregar');
        }

        if($request['publi'] == 5){
          $file = $request->file('fichero5');
          $name = $file->store('publicidad');
          $publicidad->publi5 = '/storage/' . $name;
          $publicidad->save();
          return redirect('/agregar');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicidad  $publicidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicidad $publicidad)
    {
        //
    }
}
