<?php $__env->startSection('main-container'); ?>

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" style="margin-left:25%;">
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Update Product</h4>
                      <p class="card-description">
                       Baby Care Product
                      </p>
                      <form class="forms-sample" method="POST" action="<?php echo e(url('/')); ?>/update_product" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" name="pro_id" class="form-control input-default " value="<?php echo e($data->pro_id); ?>">

                        <div class="form-group">
                          <label>Product Name</label>
                          <input type="text" class="form-control" value="<?php echo e($data->pro_name); ?>" name="name"  placeholder="Product Name">
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
                            <label>Product Price</label>
                            <input type="text" name="price" class="form-control" value="<?php echo e($data->pro_price); ?>"  placeholder="Product Price">
                            <span class="text-danger">
                                <?php $__errorArgs = ['price'];
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
                            <img src="<?php echo e(URL('backend/images/product/'. $data->pro_img)); ?>" style="height: 200px; width: 150px;" />
                            <input type="file" name="image" class="form-control"   placeholder="Product Image">
                        </div>

                        <div class="form-group">
                            <label>Enter Unit In ML</label>
                            <input type="text" name="unit" class="form-control" value="<?php echo e($data->pro_unit); ?>"  placeholder="Product Unit In ML">
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea class="form-control" name="details" value="<?php echo e(old('details')); ?>"  placeholder="Product Description"><?php echo e($data->pro_description); ?>

                            </textarea>
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

<?php echo $__env->make('backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/backend/edit_product.blade.php ENDPATH**/ ?>