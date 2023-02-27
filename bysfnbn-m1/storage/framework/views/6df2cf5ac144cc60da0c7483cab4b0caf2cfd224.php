

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row">
                    <div class="col">
                        <img src="/public/img/logo.png" alt="" class="card-img-top">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h1 class="card-title">
                                Для тех кто привык побеждать!!!
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo e($pp-> $img); ?>" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/fvfueztk/bysfnbn-m1/resources/views/about.blade.php ENDPATH**/ ?>