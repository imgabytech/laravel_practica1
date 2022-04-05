
<?php $__env->startSection('contenedor'); ?>

<body>
   <h3>Crear Producto</h3>
   <a href="/productos" class="btn btn-primary botonderecha">Ir a Producto</a><br></br>

   <form action="/crear/guardar" method ="POST">
     <?php echo csrf_field(); ?>  
     <?php echo method_field('POST'); ?>  

 <center>

    <table>
        <?php echo $__env->make('productos.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto1\resources\views/productos/crear_prod.blade.php ENDPATH**/ ?>