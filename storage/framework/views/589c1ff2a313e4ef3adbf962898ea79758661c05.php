<?php $__env->startSection('all-main-container'); ?>
    <!--/inner-page-->

    <?php
    $pro_id="";
    ?>
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Product Details</h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Product All Details</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/w3l-servicesblock-->
<section class="w3l-circles py-5" id="services">
    <div class="container py-md-5 py-2">
        <!--/row-2-->
        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row w3l-circles">
            <div class="col-lg-6 circles-left">
                <img src="<?php echo e(URL('backend/images/product/'. $data->pro_img)); ?>" style="width:300px;height:500px;"  alt="" class="radius-image img-fluid">
            </div>
            <?php
                $pro_id= $data->pro_id ;
            ?>
            <div class="col-lg-6 circles-right mt-lg-0 mt-5 align-self  position-relative">
                <h3 class="title-w3l mb-4"><?php echo e($data->pro_name); ?></h3>
                <div class="title-subw3hny" >Price :- </div> <div style="margin-bottom: 20px; margin-top:-10px;"> Rs. <?php echo e($data->pro_price); ?></div>
                <div class="title-subw3hny">Unit :- </div><div style="margin-bottom: 20px;margin-top:-10px;"><?php echo e($data->pro_unit); ?> ML</div>
                <div class="title-subw3hny">Description :- </div><div style="margin-bottom: 20px;margin-top:-10px;"><?php echo e($data->pro_description); ?></div>
                <div class="w3banner-content-btns">
                    <form action="<?php echo e(route('add_to_cart')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="title-subw3hny" >Enter Quentity :- </div>
                        <input type="hidden" value="<?php echo e($data->pro_id); ?>" name="pro_id"/>
                   <input type="text" class=" text-center" role="number" placeholder="enter Quentity" name="quantity" value="1">
                    <button class="btn-holder btn btn-success btn-block text-center" name="submit" >Add To Cart</button>
                </form>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!--//row-2-->
    </div>
</section>
<?php if(session()->has('user_id')): ?>
<?php
    $user_id =  session()->get('user_id');
?>
<section class="w3l-contact-main" id="contact">
    <div class="contact-infhny py-5">
        <div class="container py-md-5">
            <div class="title-content text-center mb-md-5 mb-4">
                <h6 class="title-subw3hny">Welcome to Baby Care World.</h6>
                <h3 class="title-w3l mx-lg-5">Product Review</h3>
            </div>
            <div class="top-map">
                <div class="map-content-9">
                    <form method="post" action="<?php echo e(url('/')); ?>/give_review" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="user_id" class="form-control"  value="<?php echo $user_id; ?>">
                        <input type="hidden" name="pro_id" class="form-control"  value="<?php echo $pro_id; ?>">
                        <div class="form-top1">
                            <div class="form mt-5">
                                <label>Subject</label>
                                <input type="text" name="subject" placeholder="Enter Subject" required="">
                                <span class="text-danger">
                                    <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                            </div>
                            <div class="form mt-5">
                                <label>Review</label>
                                <textarea name="review" placeholder="Enter Your Valuable Review" required="" style="margin-top:0px;"> </textarea>
                                <span class="text-danger">
                                    <?php $__errorArgs = ['review'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                            </div>
                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-style btn-primary">Submit Review</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php else: ?>
<section class="w3l-contact-main" id="contact">
    <div class="contact-infhny py-5">
        <div class="container py-md-5">
            <div class="title-content text-center mb-md-5 mb-4">
                <h6 class="title-subw3hny">Welcome to Baby Care World.</h6>
                <h3 class=" mx-lg-5">
                    <a class="title-subw3hny" href="<?php echo e(url('/user_login')); ?>">Login</a>
                     <label class="text-danger" >Required For Review</label>
                </h3>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!--//w3l-servicesblock-->
            <div class="title-content text-center mb-md-5 mb-4">
                <h1 style="color:rgba(212, 88, 16, 0.959);">Review</h1>

            </div>
<section class="w3l-circles py-5" id="services">
    <div class="container py-md-5 py-2">
        <!--/row-2-->

        <?php $__currentLoopData = $feedback; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row ">
            <div class="col-lg-12 circles-right mt-lg-0 mt-5 align-self  position-relative">
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($data->user_id == $data1->user_id): ?>
                    <h5 class="titlel mb-2"><?php echo e($data1->user_name); ?></h5>
                    <div class="title"><?php echo e($data1->user_email); ?></div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="title-subw3hny mb-2" ><?php echo e($data->feed_sub); ?></div>
                <div class="title-subw3hny mb-2">Review :- </div><div style="margin-bottom: 20px;margin-top:-10px;"><?php echo e($data->feed_messege); ?></div>
                <div class="w3banner-content-btns">
                </div>
            </div>
        </div>
        <hr style="border: 0.5px solid orange; border-radius:50%;">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!--//row-2-->
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.all_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/frontend/product_details.blade.php ENDPATH**/ ?>