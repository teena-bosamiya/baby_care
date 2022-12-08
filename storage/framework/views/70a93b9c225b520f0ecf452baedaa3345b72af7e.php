<?php $__env->startSection('main-container'); ?>

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View Brands</h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>IMAGE</th>
                            <th>ACTION</th>
                            <th>STATUS</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($data->brand_id); ?></td>
                          <td><?php echo e($data->brand_name); ?></td>
                          <td><img src="<?php echo e(URL('backend/images/brand/'. $data->brand_logo)); ?>" style="height: 200px; width: 250px; border-radius:0px;" /></td>
                          <td><span>
                            <a href="edit_brand/<?php echo e($data->brand_id); ?>" class="mr-4" data-toggle="tooltip"
                                   data-placement="top" title="Edit"><img src="<?php echo e(URL('backend/images/edit.png')); ?>"><i
                                       class="fa fa-pencil color-muted"></i> </a>

                                       <a
                                   href="delete_brand/<?php echo e($data->brand_id); ?>" data-toggle="tooltip"
                                   data-placement="top" title="Delete"><i
                                       class="fa fa-close color-danger"><img src="<?php echo e(URL('backend/images/delete.png')); ?>"></i></a></span>
                       </td>
                          <td><label class="badge">
                            <?php if($data->brand_status==1): ?>
                            <span>
                                <a href="change_brand_status/<?php echo e($data->brand_id); ?>" class="mr-4" data-toggle="tooltip"
                                       data-placement="top" title="Edit"><img src="<?php echo e(URL('backend/images/active.png')); ?>"><i
                                           class="fa fa-pencil color-muted"></i> </a></span>
                            <?php else: ?>
                            <span>
                                <a href="change_brand_status/<?php echo e($data->brand_id); ?>" class="mr-4" data-toggle="tooltip"
                                       data-placement="top" title="Edit"><img src="<?php echo e(URL('backend/images/deactive.png')); ?>"><i
                                           class="fa fa-pencil color-muted"></i> </a></span>
                            <?php endif; ?>
                        </label></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

        </div>
        </div>
        <!-- content-wrapper ends -->
      <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/backend/view_brands.blade.php ENDPATH**/ ?>