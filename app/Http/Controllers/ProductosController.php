<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Livewire\Features\SupportRedirects\Redirector;
use Illuminate\Database\Eloquent\Model\update;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function panel(){

        $productos = productos::all(); // Recuperar todos los registros de la tabla 'productos'
        return view('admin.panel', compact('productos'));

    }

    public function categoria(Request $request) {

        // Obtener todas las categositas
        $categoria = $request->input('categoria');
        switch ($categoria) {
            case 'play':
                $productos = Productos::where('categoria', 'PlayStation')->get();
                // Mostrar los productos encontrados
                return view('admin.panel', compact('productos'));
                break;
            case 'xbox':
                    $productos = Productos::where('categoria', 'Xbox')->get();
                    // Mostrar los productos encontrados
                    return view('admin.panel', compact('productos'));
                break;
            case 'nintendo':
                $productos = Productos::where('categoria', 'Nintendo')->get();
                // Mostrar los productos encontrados
                return view('admin.panel', compact('productos'));
                break;
            case 'perifericos':
                    $productos = Productos::where('categoria', 'Perifericos')->get();
                    // Mostrar los productos encontrados
                    return view('admin.panel', compact('productos'));
                break;
            case 'otros':
                    $productos = Productos::where('categoria', 'Otros')->get();

                    // Mostrar los productos encontrados
                    return view('admin.panel', compact('productos'));
                break;
            default:
                $productos = productos::all(); // Recuperar todos los registros de la tabla 'productos'
                return view('admin.panel', compact('productos'));
                break;
        }
        // Mostrar los productos encontrados
        

        
    }

    public function wiki():View{
        
        return view('wiki.enciclo');
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
        'categoria'=>'required',
        

        ]);

        
        $imageName = date('YmdHis') . '.' . $request->file('foto')->getClientOriginalExtension();
        $request->file('foto')->move(public_path('fotos'), $imageName);

        productos::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
            'status' => $request->input('status'),
            'categoria' => $request->input('categoria'),
            'due_date' => $request->input('due_date'),
            'foto'=> 'fotos/' . $imageName,
        ]);

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

    
    public function update(Request $request, $id){
        $imageName = date('YmdHis') . '.' . $request->file('foto')->getClientOriginalExtension();
        $request->file('foto')->move(public_path('fotos'), $imageName);
        
        $producto = productos::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->cantidad = $request->input('cantidad');
        $producto->precio = $request->input('precio');
        $producto->status = $request->input('status');
        $producto->due_date = $request->input('due_date');
        $producto->categoria = $request->input('categoria');
        $producto->foto = 'fotos/' . $imageName;
        $producto->save();
        
        return redirect()->route('productos.index');
    }

    public function destroy($id){   
        productos::destroy($id);
        return redirect()->route('productos.index');   return route('productos.index');
    }
}
