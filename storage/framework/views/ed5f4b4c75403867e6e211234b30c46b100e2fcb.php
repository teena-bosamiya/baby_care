<?php $__env->startSection('all-main-container'); ?>
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title">
                        Cart</h2>

                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Cart Product All Details</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<section class="w3l-circles " id="services">
    <div class="container py-md-5 py-2">
                    <div class="col-lg-12 circles-right mt-lg-0 mt-5 align-self  position-relative">
                        <h3 class="title-w3l mb-4">Purchase Oldest</h3>
                        <hr>
                    </div>
<table id="cart" class="table table-hover table-condensed" >
    <thead>
        <tr>
            <th style="width:50%" class="text-center">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:10%">Date</th>

        </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $cart_arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($data['product']); ?></td>
            <td><?php echo e($data['total_price']); ?></td>

            <td><?php echo e($data['cart_date']); ?></td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </tbody>
</table>
</div></section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.all_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/frontend/view_cart.blade.php ENDPATH**/ ?>