<?php $__env->startSection('all-main-container'); ?>
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                           Reset Your Password</h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Reset Password</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!-- contact-form -->
    <section class="w3l-contact-main" id="contact">
        <div class="contact-infhny py-5">
            <div class="container py-md-5">
                <div class="title-content text-center mb-md-5 mb-4">
                    <?php if(session()->has('message2')): ?>

                    <h6 class="title-subw3hny danger"> <?php echo e(session()->get('message2')); ?></h6><hr>
                    <h3 class="title-w3l mx-lg-5">Enter New Password</h3>
                    <p class="text-para mt-2">We are Always with you</p>

                            <?php else: ?>
                            <h6 class="title-subw3hny">Keep In Touch With Us.</h6>
                            <h3 class="title-w3l mx-lg-5">Enter New Password</h3>
                            <p class="text-para mt-2">We are Always with you</p>
                            <?php endif; ?>



                </div>
                <div class="top-map">
                    <div class="map-content-9">
                        <form method="post" action="<?php echo e(url('/')); ?>/update_password">
                            <?php echo csrf_field(); ?>
                            <div class="form-top1">
                                <?php $__currentLoopData = $user1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input name="user_email" value="<?php echo e($user1->user_email); ?>" type="hidden"/>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-top">
                                    <div class="form mt-5">
                                        <label>Password</label>
                                        <input type="Password" name="password"  placeholder="Enter Password" required="">
                                        <span class="text-danger">
                                            <?php $__errorArgs = ['password'];
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
                                        <label>Confirm Password</label>
                                        <input type="Password" name="confirmpassword"  placeholder="Enter Password Again" required="">
                                        <span class="text-danger">
                                            <?php $__errorArgs = ['confirmpassword'];
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
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-style btn-primary">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact-form -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.all_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/frontend/reset_password.blade.php ENDPATH**/ ?>