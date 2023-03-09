<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="text-center mb-3">Админ панель</h1>
    <h4 class="text-center">Редактирование товара</h4>
    <a class="btn btn-info mb-3" href="<?php echo e(url('/admin/product')); ?>" role="button">Опубликовать товар</a><!--Кнопка на создание товара-->
    <div class="row row-cols-2">
        <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!--вывод товара-->
        <div class="col mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="<?php echo e(url('/img/tovary')); ?>/<?php echo e($pp->img); ?>" class="d-block w-100 " alt="tovar"><!--вывод изображения товара с базы-->
                        </div>
                        <div class="col-4">
                            <h1><?php echo e($pp->name); ?></h1><!--вывод имени товара с базы-->
                            <h3><?php echo e($pp->price); ?> &#8381</h3><!--вывод цены товара с базы-->
                            <div class="">
                                <a role="button" class="btn btn-warning mx-1 mt-2">Редактирование</a><!--редакт информации товара-->
                                <a role="button" href="<?php echo e(url('/admin/product/delete/')); ?>/<?php echo e($pp->id); ?>" class="btn btn-danger mx-1 mt-2">Удалить</a> <!--удалить товар-->
                            </div>
                        </div>
                        <div class="col-4">
                            <h5>Страна: <?php echo e($pp->country); ?></h5><!--вывод страны-производителя товара с базы-->
                            <h5>Год: <?php echo e($pp->year); ?></h5><!--вывод года выпуска товара с базы-->
                            <h5>Модель: <?php echo e($pp->model); ?></h5><!--вывод модель товара с базы-->
                            <h5>Количество: <?php echo e($pp->count); ?></h5><!--вывод модель товара с базы-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <h4 class="text-center">Редактирование категории</h4>
    <a class="btn btn-info mb-3" href="<?php echo e(url('/admin/category')); ?>" role="button">Добавить категорию</a><!--Кнопка на добавление категории-->
    <div class="row row-cols-2">
        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!--вывод категорий-->
        <div class="col mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h1><?php echo e($pp->name); ?></h1><!--вывод имени товара с базы-->
                            <a role="button" class="btn btn-warning mx-1 mt-2">Редактирование</a><!--редакт информации товара-->
                            <a role="button" href="<?php echo e(url('/admin/category/delete/')); ?>/<?php echo e($pp->id); ?>" class="btn btn-danger mx-1 mt-2">Удалить</a> <!--удалить товар-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/fvfueztk/bysfnbn-m1/resources/views/admin.blade.php ENDPATH**/ ?>