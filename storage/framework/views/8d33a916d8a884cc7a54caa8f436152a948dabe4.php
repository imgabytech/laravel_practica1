<?php if($paginator->hasPages()): ?>

<nav aria-label="Page navigation example">

    <ul class="pagination justify-content-end">

        <?php if($paginator->onFirstPage()): ?>

            <li class="page-item disabled">

                <a class="page-link" href="#" tabindex="-1">Atrás</a>

            </li>

        <?php else: ?>

            <li class="page-item"><a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>">Atrás</a></li>

        <?php endif; ?>

      

        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if(is_string($element)): ?>

                <li class="page-item disabled"><?php echo e($element); ?></li>

            <?php endif; ?>

            <?php if(is_array($element)): ?>

                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($page == $paginator->currentPage()): ?>

                        <li class="page-item active">

                            <a class="page-link"><?php echo e($page); ?></a>

                        </li>

                    <?php else: ?>

                        <li class="page-item">

                            <a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>

                        </li>

                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        

        <?php if($paginator->hasMorePages()): ?>

            <li class="page-item">

                <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">Siguiente</a>

            </li>

        <?php else: ?>

            <li class="page-item disabled">

                <a class="page-link" href="#">Siguiente</a>

            </li>

        <?php endif; ?>

    </ul>

<?php endif; ?><?php /**PATH C:\xampp\htdocs\proyecto1\resources\views/vendor/pagination/custom.blade.php ENDPATH**/ ?>