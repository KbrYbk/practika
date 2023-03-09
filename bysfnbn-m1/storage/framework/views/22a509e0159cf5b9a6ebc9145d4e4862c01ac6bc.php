<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex">
                    <!--сортировка и фильтр-->
                    <div class="d-flex mb-3 me-auto">
                        <!--селектор с сортировкой-->
                        
                        <div class="dropdown mx-1">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                По году
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a href="<?php echo e(url('/catalog/sort')); ?>/year/desc" class="dropdown-item">По году ↓</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/catalog/sort')); ?>/year/asc" class="dropdown-item">По году ↑</a>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown mx-1">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                По наименованию
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                <li>
                                    <a href="<?php echo e(url('/catalog/sort')); ?>/name/desc" class="dropdown-item">По наименованию ↓</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/catalog/sort')); ?>/name/asc" class="dropdown-item">По наименованию ↑</a>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown mx-1">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton3"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                По цене
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                                <li>
                                    <a href="<?php echo e(url('/catalog/sort')); ?>/price/desc" class="dropdown-item">По цене ↓</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('/catalog/sort')); ?>/price/asc" class="dropdown-item">По цене ↑</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mx-3">
                        <!--сброс сортировки и фильтра-->
                        <a class="btn btn-light" href="<?php echo e(url('/catalog')); ?>" role="button">По умолчанию</a>
                    </div>
                    <div class="dropdown">
                        <!--выпадающий фильтр по категории-->
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton4"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Категории
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton4">
                            <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a class="dropdown-item"
                                        href="<?php echo e(url('/catalog/filter')); ?>/<?php echo e($categorya->id); ?>"><?php echo e($categorya->name); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                </div>
                <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--вывод товара-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <img src="<?php echo e(url('/img/tovary')); ?>/<?php echo e($pp->img); ?>" class="d-block w-100 "
                                        alt="tovar">
                                    <!--вывод изображения товара с базы-->
                                </div>
                                <div class="col-7">
                                    <h1><?php echo e($pp->name); ?></h1>
                                    <!--вывод имени товара с базы-->
                                    <h3><?php echo e($pp->price); ?> &#8381</h3>
                                    <!--вывод цены товара с базы-->
                                    <a href="<?php echo e(url('/catalog/tovar')); ?>/<?php echo e($pp->id); ?>"
                                        class="btn btn-info">Подробнее</a>
                                    <?php if(auth()->check()): ?>
                                        <?php if($pp->count > 0): ?>
                                            <a href="<?php echo e(Route('cartmake', $pp->id)); ?>" class="btn btn-success">Добавить
                                                в корзину</a>
                                        <?php else: ?>
                                            <a class="btn btn-primary disabled" href="">НЕТ В НАЛИЧИИ</a>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('/login')); ?>"class="btn btn-info">Авторизируйтесь</a>
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