<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-mb-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="d-flex justify-content-center">Создание товара</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('makeprod')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Название товара</label>

                            <div class="col-md-6">
                                <input class="form-control" id="name" type="text" name="name" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="img" class="col-md-4 col-form-label text-md-end">Добавить фото товара</label>

                            <div class="col-md-6">
                                <input class="form-control" id="img" type="file" name="img" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Цена</label>

                            <div class="col-md-6">
                                <input class="form-control" id="price" type="number" name="price" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="year" class="col-md-4 col-form-label text-md-end">Дата выхода продукта</label>

                            <div class="col-md-6">
                                <input class="form-control" id="year" type="text" name="year" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-end">Страна производитель</label>

                            <div class="col-md-6">
                                <input class="form-control" id="country" type="text" name="country" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="category" class="col-md-4 col-form-label text-md-end">Категория</label>

                            <div class="col-md-6">
                                <select class="form-select" name="category" id="category">
                                    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($categorya->id); ?>"><?php echo e($categorya->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="model" class="col-md-4 col-form-label text-md-end">Модель</label>

                            <div class="col-md-6">
                                <input class="form-control" id="model" type="text" name="model" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="count" class="col-md-4 col-form-label text-md-end">Количество</label>

                            <div class="col-md-6">
                                <input class="form-control" id="count" type="text" name="count" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Создать товар')); ?>

                                </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/fvfueztk/bysfnbn-m1/resources/views/makeprod.blade.php ENDPATH**/ ?>