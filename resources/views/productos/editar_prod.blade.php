@extends('plantillas.plantilla')

@section('contenedor')

<body>
<h3>Editar Producto</h3>  
<br>
<a href="/productos" class="btn btn-primary botonderecha"> Ir a Productos </a><br><br>
<br>
<form action="/actualizar/{{($producto->id)}}" method="post">
    @csrf
    @method('put')
<center>
    <table>
         @include('productos.messages')
        <tr>
            <td>
                 <label>Nombre:</label><br>
                 <input type="text" name="nombre" placeholder="Su nombre" value="{{ $producto->nombre_prod}}"><br>
            </td>
            <td>
                <label>Código:</label><br>
                <input type="text" name="codigo" placeholder="Su Apellido" value="{{ $producto->codigo_prod}}"><br>
            </td>
        </tr>
        <tr>
            <td>
                <label>Precio:</label><br>
                <input type="text" name="precio" placeholder="Su edad" value="{{ $producto->precio_prod}}"><br>
            </td>            
               
                <input type="hidden" name="stock" value="{{ $producto->stock_prod}}"><br>           
            
        </tr>    
    </table><br>

    <input class="btn btn-primary" type="submit" value="Guardar">
</center>
</form>



@endsection