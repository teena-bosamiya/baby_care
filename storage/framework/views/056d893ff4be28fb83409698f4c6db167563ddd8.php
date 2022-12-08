<?php $__env->startSection('all-main-container'); ?>
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Product</h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> All Product </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
<section class="w3l-team py-5" id="w3l-team">
    <div class="container py-md-5">
        <div class="row text-left">
            <div class="col-md-3 mt-md-5 pe-lg-5">
                <div class="title-content text-left">
                    <h6 class="title-subw3hny" >Baby Care</h6>
                    <hr style="border: 5px solid rgb(0, 0, 0);">

                    <h3 class="title-w3l mb-2" >Ctegory</h3>
                    <a class="btn btn-style btn-primary mt-md-2 mt-2" href="<?php echo e(url('/')); ?>"> View Category <span class="fas fa-arrow-right ms-2"></span></a>
<hr style="border: 5px solid rgb(0, 0, 0);">
                    <h3 class="title-w3l mb-2" style="margin-top: 20px;">Brands</h3>
                    <a class="btn btn-style btn-primary mt-md-2 mt-2" href="<?php echo e(url('/')); ?>"> View Brands <span class="fas fa-arrow-right ms-2"></span></a>
                </div>
            </div>
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 col-6 mt-5">
                <div class="team-grids text-center">
                    <img src="<?php echo e(URL('backend/images/product/'.$data->pro_img)); ?>" style="width:250px;height:400px;" class="img-fluid" alt="">
                </div>
                <h4 style="height: 60px;"><?php echo e($data->pro_name); ?></h4>
                <h6>Rs. <?php echo e($data->pro_price); ?></h6>
                <a class="btn btn-style btn-primary" href="/product_details/<?php echo e($data->pro_id); ?>"> View More Details <span class="fas fa-arrow-right ms-2"></span></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section>
<!-- team -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.all_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/frontend/product.blade.php ENDPATH**/ ?>