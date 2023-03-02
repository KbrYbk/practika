<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex">
                <div class="btn-group mb-3 me-auto"> <!--селектор с сортировкой-->
                    <a href="<?php echo e(url('/catalog/sort')); ?>/name/asc" class="btn btn-primary" aria-current="page">По наименованию</a>
                    <a href="<?php echo e(url('/catalog/sort')); ?>/year/desc" class="btn btn-primary">По году</a>
                    <a href="<?php echo e(url('/catalog/sort')); ?>/price/desc" class="btn btn-primary">По цене</a>
                </div>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Фильтры
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a class="dropdown-item" href="<?php echo e(url('/catalog/filter')); ?>/<?php echo e($obcat->id); ?>"><?php echo e($obcat->category); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li><a class="dropdown-item" href="<?php echo e(url('/catalog')); ?>">сборосить фильтр</a></li>
                    </ul>
                </div>
            </div>

            <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!--вывод товара-->
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="<?php echo e($pp->img); ?>" class="d-block w-100 " alt="tovar"><!--вывод изображения товара с базы-->
                        </div>
                        <div class="col-7">
                            <h1><?php echo e($pp->name); ?></h1><!--вывод имени товара с базы-->
                            <h3><?php echo e($pp->price); ?></h3><!--вывод цены товара с базы-->
                            <?php if(auth()->guard()->check()): ?>
                            <button type="button" class="btn btn-info mb-auto">Купить</button>
                            <?php endif; ?>
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