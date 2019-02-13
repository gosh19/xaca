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
        $destacada = Categoria::with('noticias')->where('nombre', '=', 'Destacadas')->get();
        $nacional = Categoria::with('noticias')->where('nombre', '=', 'Nacionales')->get();
        $provincial = Categoria::with('noticias')->where('nombre', '=', 'Provinciales')->get();
        $regional = Categoria::with('noticias')->where('nombre', '=', 'Regionales')->get();
        $social = Categoria::with('noticias')->where('nombre', '=', 'Sociales')->get();
        $agro = Categoria::with('noticias')->where('nombre', '=', 'Agro')->get();
        $variadas = Categoria::with('noticias')->get();
        return view('index', ['destacada' => $destacada,
        'nacional' => $nacional,
        'provincial' => $provincial,
        'regional' => $regional,
        'social' => $social,
        'agro' => $agro,
        'variadas' => $variadas
      ]);
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
        $noticia->img = '/storage/' . $name;
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
    public function show(Request $request)
    {
          $id = $request['id'];
          $destacada = Categoria::with('noticias')->where('nombre', '=', 'Destacadas')->get();
          $nacional = Categoria::with('noticias')->where('nombre', '=', 'Nacionales')->get();
          $provincial = Categoria::with('noticias')->where('nombre', '=', 'Provinciales')->get();
          $regional = Categoria::with('noticias')->where('nombre', '=', 'Regionales')->get();
          $social = Categoria::with('noticias')->where('nombre', '=', 'Sociales')->get();
          $agro = Categoria::with('noticias')->where('nombre', '=', 'Agro')->get();
          return view('destacadas', ['destacada' => $destacada,
          'nacional' => $nacional,
          'provincial' => $provincial,
          'regional' => $regional,
          'social' => $social,
          'agro' => $agro,
          'id' => $id
        ]);
    }

    public function showNew(Request $request)
    {
      $noticia = Noticia::find($request['id']);
      $nacional = Categoria::with('noticias')->where('nombre', '=', 'Nacionales')->get();
      $provincial = Categoria::with('noticias')->where('nombre', '=', 'Provinciales')->get();
      return view('new', ['noticia' => $noticia, 'nacional' => $nacional, 'provincial' => $provincial, 'id' => $request['id']]);
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
