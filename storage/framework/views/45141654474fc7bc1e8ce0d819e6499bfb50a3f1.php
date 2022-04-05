
<?php if(count($errors) >=1): ?>
	
    <div class="col-4 alert alert-danger">    	
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mensajes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($mensajes); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

<?php endif; ?><?php /**PATH C:\xampp\htdocs\proyecto1\resources\views/productos/messages.blade.php ENDPATH**/ ?>