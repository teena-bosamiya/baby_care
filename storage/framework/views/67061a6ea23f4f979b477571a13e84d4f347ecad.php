<?php $__env->startSection('main-container'); ?>

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View Users Details</h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>USER ID</th>
                          <th>NAME</th>
                          <th>EMAIL</th>
                          <th>PHONE</th>
                          <th>CITY</th>
                          <th>STATE</th>
                          <th>PIN CODE</th>
                          <th>STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($data->user_id); ?></td>
                          <td><?php echo e($data->user_name); ?></td>
                          <td><?php echo e($data->user_email); ?></td>
                          <td><?php echo e($data->user_phone); ?></td>
                          <td><?php echo e($data->user_city); ?></td>
                          <td><?php echo e($data->user_state); ?></td>
                          <td><?php echo e($data->user_pin_code); ?></td>
                          <td><label class="badge">
                            <?php if($data->user_status==1): ?>
                            <span>
                                <a href="change_user_status/<?php echo e($data->user_id); ?>" class="mr-4" data-toggle="tooltip"
                                       data-placement="top" title="Edit"><img src="<?php echo e(URL('backend/images/active.png')); ?>"><i
                                           class="fa fa-pencil color-muted"></i> </a></span>
                            <?php else: ?>
                            <span>
                                <a href="change_user_status/<?php echo e($data->user_id); ?>" class="mr-4" data-toggle="tooltip"
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

<?php echo $__env->make('backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/backend/view_users.blade.php ENDPATH**/ ?>