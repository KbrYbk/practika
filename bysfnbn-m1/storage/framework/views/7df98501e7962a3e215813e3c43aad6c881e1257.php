<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-md-5">
                    <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(url('/img/tovary')); ?>/<?php echo e($pp->img); ?>" class="d-block w-100 " alt="tovar">
                        <!--вывод изображения товара с базы-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-md-5">
                    <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <div class="col">
                                <h1><?php echo e($pp->name); ?></h1>
                                <!--вывод имени товара с базы-->
                                <h2><?php echo e($pp->price); ?> &#8381</h2>
                                <!--вывод цены товара с базы-->
                            </div>
                            <div class="col">
                                <h3><?php echo e($pp->country); ?></h3>
                                <!--вывод страны-производителя товара с базы-->
                                <h3><?php echo e($pp->year); ?></h3>
                                <!--вывод года выпуска товара с базы-->
                                <h3><?php echo e($pp->model); ?></h3>
                                <!--вывод модель товара с базы-->
                                <?php if(auth()->guard()->check()): ?>
                                    <a class="btn btn-info" href="<?php echo e(url('/cart/make')); ?>/<?php echo e($pp->id); ?>" role="button">В
                                        корзину</a>

                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/fvfueztk/bysfnbn-m1/resources/views/tovar.blade.php ENDPATH**/ ?>