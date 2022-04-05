@extends('plantillas.plantilla')
@section('contenedor')

<body>
   <h3>Crear Producto</h3>
   <a href="/productos" class="btn btn-primary botonderecha">Ir a Producto</a><br></br>

   <form action="/crear/guardar" method ="POST">
     @csrf  
     @method('POST')  

 <center>

    <table>
        @include('productos.messages')
        <tr>
            <td>
                 <label>Nombre:</label><br>
                 <input type="text" name="nombre" placeholder="Nombre del Producto" ><br>
             </td>
            <td>
                <label>Código:</label><br>
                <input type="text" name="codigo" placeholder="Código del Producto" ><br>
            </td>
         </tr>
         <tr>
            <td>
                <label>Precio:</label><br>
                <input type="decimal" name="precio" placeholder="Precio del Producto" ><br>
            </td>
            <td>
               <label>Stock Inicial:</label><br> 
               <input type="decimal" name="stock" placeholder="Cantidad en Almacén" ><br>
            </td>    
        </tr>
    </table><br>
<input class="btn btn-primary" type="submit" value="Guardar"><br>
</center> 
</form>
</body>
@endsection