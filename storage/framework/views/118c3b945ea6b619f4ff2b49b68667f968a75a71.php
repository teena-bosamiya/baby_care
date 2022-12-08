<?php $__env->startSection('all-main-container'); ?>
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Sign-up </h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Sign-up</li>
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
                    <?php if(session()->has('message')): ?>

                    <h6 class="text-danger"> <?php echo e(session()->get('message')); ?></h6>
                    <hr>
                    <?php endif; ?>
                    <h6 class="title-subw3hny">Welcome to Baby Care World.</h6>
                    <h3 class="title-w3l mx-lg-5">Sign-up here</h3>
                    <p class="text-para mt-2">Baby Care Users Sign-up</p>
                </div>
                <div class="top-map">
                    <div class="map-content-9">
                        <form method="post" action="<?php echo e(url('/')); ?>/register" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-top1">
                                <div class="form mt-5">
                                    <label>Name</label>
                                    <input type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="Enter name" required="">
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['name'];
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
                                    <label>Email Id</label>
                                    <input type="email" name="email" value="<?php echo e(old('email')); ?>"  placeholder="Enter Email" required="">
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['email'];
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
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="Enter phone number" required="">
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['phone'];
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
                                    <label>Password</label>
                                    <input type="password" name="password" value="<?php echo e(old('password')); ?>" placeholder="Enter Password" required="">
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
                                    <label>User Profile Photo(Optional)</label>
                                    <input type="file" name="image" placeholder="Image" value="<?php echo e(old('image')); ?>">
                                </div>

                                <div class="form mt-5">
                                    <label>Address Line 1</label>
                                    <input type="text" name="address1" value="<?php echo e(old('address1')); ?>" placeholder="Enter Address Line 1" required="">
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['address1'];
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
                                    <label>Address Line 2</label>
                                    <input type="text" name="address2" value="<?php echo e(old('address2')); ?>" placeholder="Enter Address Line 2" required="">
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['address2'];
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
                                    <label>City</label>
                                    <input type="text" name="city" value="<?php echo e(old('city')); ?>" placeholder="Enter City" required="">
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['city'];
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
                                    <label>State</label>
                                    <input type="text" name="state" value="<?php echo e(old('state')); ?>" placeholder="Enter State" required="">
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['state'];
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
                                    <label>Pin-Code</label>
                                    <input type="text" name="pincode" value="<?php echo e(old('pincode')); ?>" placeholder="Enter Pin-Code" required="">
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['pincode'];
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
                                    <label>Security Question</label>
                                    <select name="question" value="<?php echo e(old('question')); ?>">
                                        <option value="What is your date of birth?">What is your date of birth?</option>
                                        <option value="What was your first car?">What was your first car?</option>
                                        <option value="What’s your favorite movie?">What’s your favorite movie?</option>
                                        <option value="What is your favorite food?">What is your favorite food?</option>
                                        <option value="What is the name of the town where you were born?">What is the name of the town where you were born?</option>
                                    </select>
                                </div>
                                <div class="form mt-5">
                                    <label>Answer</label>
                                    <input type="text" name="answer" value="<?php echo e(old('answer')); ?>" placeholder="Enter Answer" required="">
                                    <span class="text-danger">
                                        <?php $__errorArgs = ['answer'];
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
                                    <button type="submit" class="btn btn-style btn-primary">Register With Us</button>
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

<?php echo $__env->make('frontend.layouts.all_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/frontend/register.blade.php ENDPATH**/ ?>