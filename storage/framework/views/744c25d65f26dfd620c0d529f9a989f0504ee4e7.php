<?php $__env->startSection('contenedor'); ?>
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
<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr scopr="row">
        <td><?php echo e($producto->nombre_prod); ?></td>
        <td><?php echo e($producto->codigo_prod); ?></td>
        <td><?php echo e($producto->precio_prod); ?></td>
        <td><?php echo e($producto->stock_prod); ?></td>

        <td>
            <form action="/mostrar/<?php echo e(($producto->id)); ?>" method ="POST" >
            <?php echo csrf_field(); ?>
            <?php echo method_field('get'); ?>           
            <button class="btn btn-primary" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Detalle del Producto <?php echo e(($producto->nombre_prod)); ?>">Detalles</button>            
            </form>  
        </td>       
       
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>

<div >
    <?php echo e($productos->links('vendor.pagination.custom')); ?>    
</div>



<script>
    function EliminarRegistro(value){
        action = confirm(value) ? true: event.preventDefault()
    }
</script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('plantillas.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto1\resources\views/productos/listar_prod.blade.php ENDPATH**/ ?>