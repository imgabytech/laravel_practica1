
@extends('plantillas.plantilla')

@section('contenedor')
<style>

    .page-item.active .page-link{
        z-index: 3;
        color: #fff !important  ;
        background-color: 0B5ED7;/*#00ACD6 !important;*/
        border-color: 0B5ED7;/*#00ACD6 !important;*/
        border-radius: 50%;
        padding: 6px 12px;
    }

    .page-link{
        z-index: 3;
        color: 0B5ED7;/*#00ACD6 !important;*/
        background-color: #fff;
        border-color: #007bff;
        border-radius: 50%;
        padding: 6px 12px !important;
    }

    .page-item:first-child .page-link{
        border-radius: 30% !important;
    }

    .page-item:last-child .page-link{
        border-radius: 30% !important;
    }

    .pagination li{
        padding: 3px;
    }

    .disabled .page-link{
        color: #212529 !important;
        opacity: 0.5 !important;
    }

</style>

<body>

<h3>Listado de Productos</h3>

<div class="table-responsive" id="centrado">
    <table>
<td>
<a href="/crear" class="btn btn-primary botonderecha" data-bs-toggle="tooltip" data-bs-placement="top" title="Crear Nuevo Producto">Nuevo</a></td>
<td>
<a href="/crearImagen" class="btn btn-primary botonderecha" data-bs-toggle="tooltip" data-bs-placement="top" title="Crear Nuevo Producto">Imágenes</a>
</td>
</tr>
</table>
<table class="table table-hover align-middle">

  <tr>
    <th scope="col" width="20%">Nombre</th>
    <th scope="col" width="8%">Código</th>
    <th scope="col" width="10%">Precio</th>
    <th scope="col" width="10%">Stock</th>
    <th scope="col" width="10%"></th>

  </tr>
@foreach ($productos as $producto)
    <tr scopr="row">
        <td>{{ $producto->nombre_prod }}</td>
        <td>{{ $producto->codigo_prod }}</td>
        <td>{{ $producto->precio_prod }}</td>
        <td>{{ $producto->stock_prod }}</td>

        <td>
            <form action="/mostrar/{{($producto->id)}}" method ="POST" >
            @csrf
            @method('get')           
            <button class="btn btn-primary" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Detalle del Producto {{($producto->nombre_prod)}}">Detalles</button>            
            </form>  
        </td>       
       
</tr>
@endforeach
</table>
</div>

<div >
    {{ $productos->links('vendor.pagination.custom') }}    
</div>



<script>
    function EliminarRegistro(value){
        action = confirm(value) ? true: event.preventDefault()
    }
</script>

@endsection


