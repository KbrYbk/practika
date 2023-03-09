<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex"> <!--сортировка и фильтр-->
                <div class="btn-group mb-3 me-auto"> <!--селектор с сортировкой-->
                    <a href="<?php echo e(url('/catalog/sort')); ?>/year/desc" class="btn btn-primary">По году</a>
                    <a href="<?php echo e(url('/catalog/sort')); ?>/name/asc" class="btn btn-primary" aria-current="page">По наименованию</a>
                    <a href="<?php echo e(url('/catalog/sort')); ?>/price/desc" class="btn btn-primary">По цене</a>
                </div>
                <div class="mx-3"> <!--сброс сортировки и фильтра-->
                    <a class="btn btn-light" href="<?php echo e(url('/catalog')); ?>" role="button">По умолчанию</a>
                </div>
                <div class="dropdown"> <!--выпадающий фильтр по категории-->
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Категории
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a class="dropdown-item" href="<?php echo e(url('/catalog/filter')); ?>/<?php echo e($categorya->id); ?>"><?php echo e($categorya->name); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

            </div>
            <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!--вывод товара-->
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="<?php echo e(url('/img/tovary')); ?>/<?php echo e($pp->img); ?>" class="d-block w-100 " alt="tovar"><!--вывод изображения товара с базы-->
                        </div>
                        <div class="col-7">
                            <h1><?php echo e($pp->name); ?></h1><!--вывод имени товара с базы-->
                            <h3><?php echo e($pp->price); ?> &#8381</h3><!--вывод цены товара с базы-->
                            <?php if(auth()->guard()->check()): ?>
                            <button type="button" class="btn btn-info mb-auto">Подробнее</button>
                            <?php endif; ?>
                            <a href="<?php echo e(url('/catalog/tovar')); ?>/<?php echo e($pp->id); ?>" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/fvfueztk/bysfnbn-m1/resources/views/catalog.blade.php ENDPATH**/ ?>