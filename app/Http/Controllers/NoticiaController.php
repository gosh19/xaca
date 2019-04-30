<?php

namespace App\Http\Controllers;

use App\Noticia;
use App\Categoria;
use App\Publicidad;
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
        $publicidad = Publicidad::all();

        $variadas = Categoria::with('noticias')->get();
        return view('index', ['destacada' => $destacada,
        'nacional' => $nacional,
        'provincial' => $provincial,
        'regional' => $regional,
        'social' => $social,
        'agro' => $agro,
        'variadas' => $variadas,
        'publicidad' => $publicidad
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
      $publicidad = Publicidad::all();
      return view('agregar', ['publicidad' => $publicidad]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }

    public function modificar()
    {
        $noticias = Noticia::orderBy('created_at', 'ASC')->paginate(12);
        return view('modificar', ['noticias' => $noticias]);
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
        if($request->hasFile('video')){
          $file = $request->file('video');
          $name = $file->store('noticias-img');
          $noticia->video = '/storage/' . $name;
        }
        $file = $request->file('fichero');
        $name = $file->store('noticias-img');
        $noticia->img ='/storage/'. $name;
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
          $publicidad = Publicidad::all();

          return view('destacadas', ['destacada' => $destacada,
          'nacional' => $nacional,
          'provincial' => $provincial,
          'regional' => $regional,
          'social' => $social,
          'agro' => $agro,
          'id' => $id,
          'publicidad' => $publicidad
        ]);
    }

    public function showNew(Request $request)
    {
      $noticia = Noticia::find($request['id']);
      $nacional = Categoria::with('noticias')->where('nombre', '=', 'Nacionales')->get();
      $provincial = Categoria::with('noticias')->where('nombre', '=', 'Provinciales')->get();
      $publicidad = Publicidad::all();
      return view('new', ['noticia' => $noticia,
      'nacional' => $nacional,
      'provincial' => $provincial,
      'id' => $request['id'],
      'publicidad' => $publicidad
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $noticia = Noticia::find($request['id']);
        return view('editando', ['noticia' => $noticia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
            $noticia = Noticia::find($request['id']);

            if($request['titulo'] != ""){
              $noticia->titulo = $request['titulo'];
              $noticia->save();

            }
            if($request['subtitulo'] != ""){
              $noticia->subtitulo = $request['subtitulo'];
              $user->save();
            }
            if($request['cuerpo'] != ""){
              $user->dni = $request['cuerpo'];
              $user->save();
            }
            if($request->hasFile('fichero')){
              $file = $request->file('fichero');
              $name = $file->store('noticias-img');
              $noticia->img = '/storage/' . $name;
              $noticia->save();
            }
            if($request['epigrafe'] != ""){
              $noticia->epigrafe = $request['epigrafe'];
              $user->save();
            }

            return redirect('/modificar');
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
