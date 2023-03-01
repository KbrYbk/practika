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
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Сортировка
                    </button>
                    <ul class="dropdown-menu ms-auto" aria-labelledby="dropdownMenuButton1">

                        <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/id/desc" />от недавно добавленных к
                            старым</a>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/id/asc" />от старых к недавно добавленым</a>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/price/asc" />от дешевых к дорогим</a>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/price/desc" />от дорогих к дешевым</a>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/year_of_production/desc" />от недавно
                            вышедшим к старым</a>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/catalog/sort')); ?>/year_of_production/asc" />от старых к недавно
                            вышедшим</a>
                        </li>
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