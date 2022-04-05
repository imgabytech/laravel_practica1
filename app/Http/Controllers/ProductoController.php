<?php

namespace App\Http\Controllers;  

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function __construct(Producto $productos){
        $this->productos = $productos;
}
    

    public function index() {

        $productos = Producto::orderBy('nombre_prod', 'asc')->paginate(5);           
        return view('productos.listar_prod', ['productos' => $productos]); 
    }

    
    public function create() {
        return view('productos.crear_prod'); 
    }

    
    public function store(Request $request) {
    
    /* * * * * Metodo 1 * * * * * */
    $request->validate ([   
        'nombre' => 'required|max:30',
        'codigo' => 'required|max:10',
        ],[ 
        'nombre.required' => 'Por favor ingrese el nombre del Producto',
        'nombre.max' => 'Máximo :max caracteres en el nombre',
        'codigo.required' => 'Por favor ingrese el código del Producto',
        'codigo.unique'=>'El código debe ser un valor único',
        'codigo.max'=>'El Código debe tener un máximo :max de caracteres',

        ]);     

       
        $producto = new Producto();
        $producto->nombre_prod = $request->nombre;
        $producto->codigo_prod = $request->codigo;
        $producto->precio_prod = $request->precio;
        $producto->stock_prod = $request->stock; 
        $producto->save();
        return redirect()->action([ProductoController::class, 'index']); 
       
    }   


    function mostrar($id){
        $producto = Producto::find($id);
        return view('productos.mostrar_prod',compact('producto'));
    }
    
    public function verEditar($id)  {          
        $producto = Producto::find($id);
        return view('productos.editar_prod',compact(['producto'])); 
    }  
   
    
    public function update(Request $request, $id)
    {

    $request->validate ([   
        'nombre' => 'required|max:30',
        'codigo' => 'required|max:10',
        ],[ 
        'nombre.required' => 'Por favor ingrese el nombre del Producto',
        'nombre.max' => 'Máximo :max caracteres en el nombre',
        'codigo.required' => 'Por favor ingrese el código del Producto',
        'codigo.unique'=>'El código debe ser un valor único',
        'codigo.max'=>'El Código debe tener un máximo :max de caracteres',

        ]);         

        $update = [
            'nombre_prod' => $request->nombre,
            'codigo_prod' => $request->codigo,
            'precio_prod' => $request->precio,
            'stock_prod' => $request->stock,
            'id' => $request->id  
        ];

        $producto = Producto::where('id', $id)->update($update); 
        return redirect()->action([ProductoController::class, 'index']);     
    }

    
    public function eliminar($id)
    {        
            $producto = Producto::find($id);
            $producto->delete();
            return redirect()->action([ProductoController::class, 'index']);     
    }


    public function entrada($id){
        $producto = Producto::find($id);
         return view('productos.entrada_prod',compact('producto'));
       
    }
    
    public function salida($id){
        $producto = Producto::find($id);
         return view('productos.salida_prod',compact('producto'));
    
    }
}
