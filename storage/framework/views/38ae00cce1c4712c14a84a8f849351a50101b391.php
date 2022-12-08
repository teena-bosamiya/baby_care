<?php $__env->startSection('main-container'); ?>

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="margin-left:25%;">
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add Brands</h4>
                      <p class="card-description">
                        Baby Products Brands
                      </p>
                      <form class="forms-sample" method="post" action="<?php echo e(url('/')); ?>/update_brand" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" name="brand_id" class="form-control input-default " value="<?php echo e($data->brand_id); ?>">

                        <div class="form-group">
                          <label>Brand Name</label>
                          <input type="text" name="name" required class="form-control" value="<?php echo e($data->brand_name); ?>" placeholder="Product Brand Name">
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
                            <label >Brand Logo</label>
                            <img src="<?php echo e(URL('backend/images/brand/'. $data->brand_logo)); ?>" style="height: 100px; width: 150px;" />
                            <input type="file" name="logo" class="form-control" value="<?php echo e(old('logo')); ?>" placeholder="Product Brand Image">

                          </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/backend/edit_brands.blade.php ENDPATH**/ ?>