<?php

namespace App\Http\Controllers;

use App\Noticia;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Categoria::with('noticias')->orderBy('created_at', 'DESC')->get();
        return view('index', ['noticias' => $noticias]);
    }

    public function noticias()
    {
        $noticias = Categoria::with('noticias')->where('nombre', '=', 'Destacadas')->get();
        for($i = 0; $i < count($noticias);$i++){
          for($x = 0; $x < count($noticias[$i]['noticias']); $x++){
              $array[] = $noticias[$i]['noticias'][$x];
          }
        }
        return $array;
    }

    public function agregar()
    {
      return view('agregar');
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
        $categoria = Categoria::where('nombre', '=', $request['categoria'])->get();
        $noticia = new Noticia;
        $noticia->titulo = $request['titulo'];
        $noticia->subtitulo = $request['subtitulo'];
        $noticia->cuerpo = $request['cuerpo'];
        $file = $request->file('fichero');
        $name = $file->store('noticias-img');
        $noticia->img = $name;
        $noticia->epigrafe = $request['epigrafe'];
        $noticia->save();
        $noticia->categorias()->attach($categoria[0]['id']);

        return redirect()->route('Noticia.agregar');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        //
    }
}
