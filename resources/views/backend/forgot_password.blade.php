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
		<form action="{{ url('/') }}/verify_admin" method="post">
            @if(session()->has('message1'))
            <h5 style="color: white;"> {{ session()->get('message1') }}</h5>
            @endif
            @csrf
			<div class="form-style-agile">
				<label>
					Username
					<i class="fas fa-user"></i>
				</label>
				<input placeholder="Email Id" name="email" type="email" required="">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
			</div>
			<div class="form-style-agile">
				<label>
					Question
					<i class="fas fa-unlock-alt"></i>
				</label>
				<select name="question">
                    <option value="What is your date of birth?">What is your date of birth?</option>
                    <option value="What was your first car?">What was your first car?</option>
                    <option value="What’s your favorite movie?">What’s your favorite movie?</option>
                    <option value="What is your favorite food?">What is your favorite food?</option>
                    <option value="What is the name of the town where you were born?">What is the name of the town where you were born?</option>
                </select>
			</div>
            <div class="form-style-agile">
				<label >
					Answer
                    <i class="fas fa-solid fa-key"></i>
				</label>
				<input placeholder="Answer" name="answer" type="text" required="">
                <span class="text-danger">
                    @error('answer')
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
