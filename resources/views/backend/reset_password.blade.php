<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Baby Care</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
        <link rel="icon" href="{{ url('backend/login/images/baby.png') }}" type="image/icon type">

	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="{{url('backend/login/css/style.css')}}" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="{{url('backend/login/css/fontawesome-all.css')}}">
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

		<form action="{{ url('/') }}/update_admin_password" method="post">
            @csrf
            @foreach ($admin1 as $data )
            <input name="admin_email" value="{{ $admin1->admin_email }}" type="hidden"/>
            @endforeach
            @if(session()->has('message2'))
            <h5 style="color: white"> {{ session()->get('message2') }}</h5>
            @endif
			<div class="form-style-agile">
				<label>
					Password
					<i class="fas fa-unlock-alt"></i>
				</label>
				<input placeholder="Password" name="password" type="password" required="">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
			</div>
			<div class="form-style-agile">
				<label >
					Confirm Password
                    <i class="fas fa-solid fa-key"></i>
				</label>
				<input placeholder="Confirm Password" name="confirmpassword" type="password" required="">
                <span class="text-danger">
                    @error('confirmpassword')
                        {{ $message }}
                    @enderror
                </span>
			</div>
			<button type="submit" value="Submit">Submit</button>

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
