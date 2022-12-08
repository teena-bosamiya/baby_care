<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Baby Care</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />

    <link rel="icon" href="<?php echo e(url('backend/login/images/baby.png')); ?>" type="image/icon type">

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="<?php echo e(url('backend/login/css/style.css')); ?>" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="<?php echo e(url('backend/login/css/fontawesome-all.css')); ?>">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->

</head>

<body>
	<!-- title -->
	<h1>
		<span>B</span>aby
		<span>C</span>are
		<span>A</span>dmin</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form action="<?php echo e(url('admin_login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php if(session()->has('message3')): ?>
            <h5 style="color: white"> <?php echo e(session()->get('message3')); ?></h5>
            <?php endif; ?>
			<div class="form-style-agile">
				<label>
					Username
					<i class="fas fa-user"></i>
				</label>
				<input placeholder="Email Id" name="email" type="email" required="">
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
			<div class="form-style-agile">
				<label>
					Password
					<i class="fas fa-unlock-alt"></i>
				</label>
				<input placeholder="Password" name="password" type="password" required="">
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
			<!-- checkbox -->
			<div class="wthree-text hover">
				<ul>
					<li>
						<a href="<?php echo e(url('forgot_password_admin')); ?>">Forgot Password?</a>
					</li>
				</ul>
			</div>
			<!-- //checkbox -->
			<input type="submit" value="Log In">

		</form>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>Developed By :- Veenchhee Teena
		</p>
	</div>
	<!-- //copyright -->

</body>

</html>
<?php /**PATH C:\xampp\htdocs\baby_care\resources\views/backend/index.blade.php ENDPATH**/ ?>