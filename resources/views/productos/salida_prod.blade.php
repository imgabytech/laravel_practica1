@extends('plantillas.plantilla')

@section('contenedor')

<body>
<h3>Venta Producto Actual</h3>  
<br>
<a href="/mostrar/{{($producto->id)}}" class="btn btn-primary botonderecha"> Atrás</a><br><br>
<br>
<form action="/venta" method="post">
    @csrf
    @method('put')
<center>
    <table>
        <tr>
            <td>
                 <label>Cantidad:</label><br>
                 <input type="text" name="cantidad" placeholder="Cantidad Vendida"><br>
            </td>
            <td>
                <label>Referencia:</label><br>
                <input type="text" name="referencia" placeholder="Nº de Control"><br>
            </td>
        </tr>
        
    </table><br>

    <input class="btn btn-primary" type="submit" value="Vender">
</center>
</form>



@endsection