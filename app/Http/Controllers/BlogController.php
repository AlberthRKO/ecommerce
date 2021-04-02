<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['blog'] = Blog::all();
        return view('blog', $datos);
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

    public function mostrarBlog()
    {
        $datos['blog'] = Blog::all();
        return view('blogger', $datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recabamos la info del form
        $datosBlog = request()->except('_token');
        
        //preguntamos si hay foto en el campo image
        if($request->hasFile('image')){
            // alteramos el campo insertando la ubi de la foto
            $datosBlog['image']= $request->file('image')->store('uploads','public');
        }

        Blog::insert($datosBlog);
        // return response()->json($datosBlog);
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // return view('ver-blog');
        $blog=Blog::findOrFail($id);
        return view('ver-blog', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = Blog::findOrFail($id);
        return view('editBlog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualizar datos del edit
        $datosBlog = request()->except('_token', '_method');
        // Preguntamos si hay foto para borrar el anterior
        if($request->hasFile('image')){
            // recibimos los datos segun el id
            $blog = Blog::findOrFail($id);
            Storage::delete('public/'.$blog->image);
            //recibimos la nueva foto y mostramos la ubi dnd se encuentra
            $datosBlog['image'] = $request->file('image')->store('uploads','public');
        }

        // Actualizamos
        Blog::where('id','=',$id)->update($datosBlog);
        return redirect('blog');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eliminamos el registro
        Blog::destroy($id);
        return redirect('blog');
    }
}
