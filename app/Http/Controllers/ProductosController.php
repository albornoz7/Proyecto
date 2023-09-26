<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $productos = productos::latest()->paginate(5); // Recuperar todos los registros de la tabla 'productos'
    return view('admin.index', compact('productos')); // Pasar los datos a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
'nombre'=>'required',
'descripcion'=>'required',
'cantidad'=>'required',
'precio'=>'required',
'status'=>'required',
'due_date'=>'required',

        ]);
        productos::create($request->all());
        return redirect()->route('productos.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $productos = productos::find($id);
        return view('admin.edit', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
    $producto = productos::find($id);
    $request->validate([
        
    ]);
    $producto->nombre = $request->input('nombre');
    $producto->descripcion = $request->input('descripcion');
    $producto->cantidad = $request->input('cantidad');
    $producto->precio = $request->input('precio');
    $producto->status = $request->input('status');
    $producto->due_date = $request->input('due_date');
    $producto->save();
    return redirect()->route('productos.index');
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productos $productos)
    {
        $productos->destroy($productos);
        return redirect()->route('productos.index');
    }
}
