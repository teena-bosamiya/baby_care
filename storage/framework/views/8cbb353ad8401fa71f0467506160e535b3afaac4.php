<!DOCTYPE html>
<html lang="en">
  <?php if(session()->has('admin_id')): ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Baby Care</title>
  <!-- base:css -->
  <link rel="icon" href="<?php echo e(url('backend/login/images/baby.png')); ?>" type="image/icon type">

  <link rel="stylesheet" href="<?php echo e(url('backend/vendors/mdi/css/materialdesignicons.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('backend/vendors/base/vendor.bundle.base.css')); ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(url('backend/css/style.css')); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo e(url('backend/images/favicon.png')); ?>" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">

            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="brand-logo" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('backend/images/logo.png')); ?>" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name"><?php echo e($data->admin_name); ?></span>
                    <span class="online-status"></span>
                    <img src="<?php echo e(url('backend/images/admin/'. $data->admin_pic)); ?>" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item" href="<?php echo e(url('profile/'. $data->admin_id)); ?>">
                        <i class="mdi mdi-settings text-primary"></i>
                        Profile
                      </a>
                      <a class="dropdown-item" href="<?php echo e(url('/admin_logout')); ?>">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </li>
            </ul>

          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/view_admin')); ?>">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>


              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">View</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                    <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/view_category')); ?>">Category</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/view_brands')); ?>">Brands</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/view_product')); ?>">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/view_cart')); ?>">Sales</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/view_users')); ?>">Users</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/view_contact')); ?>">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/view_feedback')); ?>">FeedBack</a></li>
                    </ul>
                </div>
              </li>

              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Add</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/add_category')); ?>">Category</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/add_brands')); ?>">Brands</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/add_product')); ?>">Products</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="<?php echo e(url('/add_new_admin')); ?>" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Add New Admin</span></a>
              </li>
            </ul>
        </div>
      </nav>
    </div>
    <?php else: ?>
    <script>window.location.href = "admin";</script>
    <?php endif; ?>
<?php /**PATH C:\xampp\htdocs\baby_care\resources\views/backend/layouts/header.blade.php ENDPATH**/ ?>