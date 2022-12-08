<?php $__env->startSection('main-container'); ?>

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View Contact</h4>
                    <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>EMAIL</th>
                          <th>SUBJECT</th>
                          <th>MESSEGE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($data->con_id); ?></td>
                          <td><?php echo e($data->con_name); ?></td>
                          <td><?php echo e($data->con_email); ?></td>
                          <td><?php echo e($data->con_sub); ?></td>
                          <td><?php echo e($data->con_messege); ?></td>
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

<?php echo $__env->make('backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\baby_care\resources\views/backend/view_contact.blade.php ENDPATH**/ ?>