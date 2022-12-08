<?php $__env->startSection('main-container'); ?>

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View Feedback</h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>PRODUCT ID</th>
                            <th>USER ID</th>
                            <th>TITLE</th>
                            <th>MESSEGE</th>
                            <th>STATUS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $feed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($data->feed_id); ?></td>
                          <td><?php echo e($data->pro_id); ?></td>
                          <td><?php echo e($data->user_id); ?></td>
                          <td><?php echo e($data->feed_sub); ?></td>
                          <td><?php echo e($data->feed_messege); ?></td>
                          <td><label class="badge">
                            <?php if($data->feed_status==1): ?>
                            <span>
                                <a href="change_feed_status/<?php echo e($data->feed_id); ?>" class="mr-4" data-toggle="tooltip"
                                       data-placement="top" title="Edit"><img src="<?php echo e(URL('backend/images/active.png')); ?>"><i
                                           class="fa fa-pencil color-muted"></i> </a></span>
                            <?php else: ?>
                            <span>
                                <a href="change_feed_status/<?php echo e($data->feed_id); ?>" class="mr-4" data-toggle="tooltip"
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

<?php echo $__env->make('backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/backend/view_feedback.blade.php ENDPATH**/ ?>