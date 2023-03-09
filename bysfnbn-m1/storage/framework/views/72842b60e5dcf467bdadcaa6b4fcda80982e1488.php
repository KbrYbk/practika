<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">

            <h1>Корзина</h1>

            <div class="row row-cols-2">
                <?php $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--вывод товара-->
                    <div class="col mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h1><?php echo e($item->prod->name); ?></h1>
                                        <!--вывод имени товара с базы-->
                                        <h3><?php echo e($item->prod->price); ?> &#8381</h3>
                                        <!--вывод цены товара с базы-->
                                    </div>
                                    <div class="col-6">
                                        <a href="<?php echo e(route('cartdelete', $item->id)); ?>">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/fvfueztk/bysfnbn-m1/resources/views/basket.blade.php ENDPATH**/ ?>