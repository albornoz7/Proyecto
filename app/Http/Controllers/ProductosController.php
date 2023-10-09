<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Livewire\Features\SupportRedirects\Redirector;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function panel(){
        $productos = productos::all(); // Recuperar todos los registros de la tabla 'productos'
        return view('admin.panel', compact('productos'));
    }

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
    $imageName = date('YmdHis') . '.' . $request->file('foto')->getClientOriginalExtension();
    $request->file('foto')->move(public_path('fotos'), $imageName);

        productos::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
            'status' => $request->input('status'),
            'due_date' => $request->input('due_date'),
            'foto'=> 'fotos/' . $imageName,
        ]
            
    
    );
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
    /*public function update(Request $request, $id): RedirectResponse
    {
        $producto = productos::find($id);

        if($request->hasFile('foto')){
            $currenImagenPath = $producto->imgpath;
            $imageName = date('YmdHis') . '.' . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move(public_path('fotos'), $imageName);
        }
        
        
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->cantidad = $request->input('cantidad');
        $producto->precio = $request->input('precio');
        $producto->status = $request->input('status');
        $producto->due_date = $request->input('due_date');
        $producto->save();

        return redirect()->route('productos.index');
    }*/
    public function update(Request $request, $id){

        $producto = productos::find($id);

        $imagenAnterior = $producto->foto;

        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->cantidad = $request->input('cantidad');

        if ($request->hasFile('foto')) {

            if ($imagenAnterior) {
                Storage::delete('fotos/' . $imagenAnterior);
            }

            $foto = $request->file('fotos');
            $rutaGuardarImagen = "fotos/";
            $imgGuardado = date('YmdHis'). "." . $foto->getClientOriginalExtension();
            $foto->move($rutaGuardarImagen, $imgGuardado);

            $producto['foto'] = $imgGuardado;
        }

        $producto->save();

        return redirect()->route('productos.index');

    }

    public function destroy($id){   
        productos::destroy($id);
        return redirect()->route('productos.index');   return route('productos.index');
    }
}
