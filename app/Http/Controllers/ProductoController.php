<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $producto = Producto::all();
        //var_dump($producto);
        return view('producto.listar', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('producto.crear');
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
        //echo "enviando";
        $request->validate([
            'txtNombre'=>'required',
            'txtPrecio'=>'required',
            'txtStock'=>'required'
        ]);

        $producto = new Producto([
            'nombre' => $request->get('txtNombre'),
            'precio' => $request->get('txtPrecio'),
            'stock' => $request->get('txtStock')
        ]);

        $producto->save();
        return redirect('/producto')->with('success','El producto se registro exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
        return view('producto.detalle',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
        return view('producto.editar',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Guardar los cambios en la base de datos
        //validación de campos
        $request->validate([
            'txtNombre'=>'required',
            'txtPrecio'=>'required',
            'txtStock'=>'required'
        ]);

        $producto = Producto::find($id); //Buscar Producto
        $producto->nombre = $request->get('txtNombre');
        $producto->precio = $request->get('txtPrecio');
        $producto->stock = $request->get('txtStock');

        $producto->update();

        return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
        $producto->delete();
        return redirect('/producto');
    }
}
