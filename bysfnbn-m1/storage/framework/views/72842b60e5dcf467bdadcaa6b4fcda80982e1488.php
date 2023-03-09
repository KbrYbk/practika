<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">

        <h1>Корзина</h1>

        <table>
            <thead>
                <tr>
                    <th>Название продукта</th>
                    <th>Цена</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->prod->name); ?></td>
                    <td><?php echo e($item->prod->price); ?></td>
                    <td><a href="<?php echo e(route('cartdelete', $item->id)); ?>">Удалить</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/fvfueztk/bysfnbn-m1/resources/views/basket.blade.php ENDPATH**/ ?>