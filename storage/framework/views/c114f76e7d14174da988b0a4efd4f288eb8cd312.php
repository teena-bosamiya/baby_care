<?php $__env->startSection('main-container'); ?>

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="margin-left:25%;">
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Category</h4>
                      <?php if(session()->has('message')): ?>

                    <h6 class="text-danger"> <?php echo e(session()->get('message')); ?></h6>
                    <hr>
                    <?php endif; ?>
                     <p class="card-description">
                        Baby Product Category
                      </p>
                      <form class="forms-sample" method="POST" action="<?php echo e(url('/')); ?>/insert_category" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>"  placeholder="Product Category Name">
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
                        <div class="form-group">
                            <label >Image</label>
                            <input type="file" name="image" class="form-control" value="<?php echo e(old('image')); ?>"  placeholder="Product Category Image">
                            <span class="text-danger">
                                <?php $__errorArgs = ['image'];
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
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
        <!-- content-wrapper ends -->
      <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/backend/add_category.blade.php ENDPATH**/ ?>