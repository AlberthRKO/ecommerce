<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

// libreria para borrar img de storage
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{

    /**
     * Class constructor.
     */
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
        $datos['productos'] = Products::all();
        return view('producto', $datos);
    }
    public function mostrarProducto()
    {
        $datos['productos'] = Products::all();
        return view('shop', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crearProducto');
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
        // $datosProducto= request()->all();
        //recaudamos la info excepto el token
        $datosProducto = request()->except('_token');

        //preguntamos si hay foto en el campo image
        if($request->hasFile('image')){
            // alteramos el campo insertando la ubi de la foto
            $datosProducto['image']= $request->file('image')->store('uploads','public');
        }

        Products::insert($datosProducto);
        // return response()->json($datosProducto);
        return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $producto=Products::findOrFail($id);
        return view('viewProducto', compact('producto'));
        // return view('viewProducto');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto=Products::findOrFail($id);
        return view('editProducto', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProducto = request()->except('_token', '_method');

        //preguntamos si hay foto en el campo image
        if($request->hasFile('image')){

            // recibimos los datos para el borrado de img
            $producto=Products::findOrFail($id);
            Storage::delete('public/'.$producto->image);
            // alteramos el campo insertando la ubi de la foto
            $datosProducto['image']= $request->file('image')->store('uploads','public');
        }


        // buscamos la info que esta con id y lo comparamos con el id que recibe
        Products::where('id','=',$id)->update($datosProducto);
        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eliminamos el producto recibiendo el id desde producto.blade
        Products::destroy($id);
        return redirect('productos');
    }
}
