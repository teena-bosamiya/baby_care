<?php $__env->startSection('main-container'); ?>

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="margin-left:25%;">
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Category</h4>
                      <p class="card-description">
                        <?php if(session()->has('message1')): ?>

                    <h6 class="text-danger"> <?php echo e(session()->get('message1')); ?></h6>
                    <hr>
                    <?php endif; ?>
                        Baby Product Category
                      </p>
                      <form class="forms-sample" method="POST" action="<?php echo e(url('/')); ?>/update_category" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group">
                            <input type="hidden" name="cat_id" class="form-control input-default " value="<?php echo e($data->cat_id); ?>">

                          <label>Name</label>
                          <input type="text" name="name" class="form-control" value="<?php echo e($data->cat_name); ?>"  placeholder="Product Category Name">
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
                            <img src="<?php echo e(URL('backend/images/category/'. $data->cat_img)); ?>" style="height: 100px; width: 150px;" />
                            <input type="file" name="image" class="form-control"  placeholder="Product Category Image">
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

<?php echo $__env->make('backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/backend/edit_category.blade.php ENDPATH**/ ?>