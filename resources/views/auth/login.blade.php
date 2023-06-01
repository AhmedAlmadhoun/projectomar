{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<!DOCTYPE html>
<html dir="rtl">
<head>
	<title>Login Form</title>


	<style>
		body {
			font-family: Arial, sans-serif;
            background-image: url('{{ asset('siteasset/images/1.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
		}

		.container {

			margin: auto;
			max-width: 500px;
			padding: 20px;
		}

		form {
            margin-top: 150px;
			padding: 10px;
			border-radius: 5px;

		}

		label{
			display: block;
			margin-bottom: 0px;
            margin-left: 0px;
			font-weight: bold;
		}

		input[type="text"], input[type="password"] {
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			background-color: #fff;
			width: 100%;
			box-sizing: border-box;
		}
		.a1{
			color: white;
			text-decoration: none;

		}
		.a1:hover{
			color: rgb(26, 223, 158);
		}
		input[type="submit"] {
			background-color: #4CAF50;
			border: none;
			color: #fff;
			padding: 10px 20px;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			border-radius: 5px;
			margin-right: 180px;
			cursor: pointer;
		}

		input[type="checkbox"]{
          display: inline-block;
          padding-left: 25px;
          padding-right: 25px;
		  width: 20px;
		  height: 15px;


        }
		input[type="submit"]:hover, input[type="reset"]:hover {
			background-color: #3e8e41;
		}

		@media only screen and (max-width: 600px) {
			input[type="submit"], input[type="reset"] {
				margin-top: 10px;
				margin-right: 0;
				display: block;
				width: 100%;
			}
		}

		@media only screen and (max-width: 500px) {
			.container {
				max-width: 400px;
			}
		}
	</style>
</head>
<body>

	<div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
			<input type="text" id="email" class="@error('email') is-invalid @enderror" name="email" placeholder="الايميل" autocomplete="email" required>
        @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="كلمة المرور">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
			<div style="text-align: right; margin-top: 20px;">
                <a class="a1" href="{{ route('register') }}">هل لديك حساب؟ ام لا</a><br><br>
                @if (Route::has('password.request'))
            <a class="a1" href="{{ route('password.request') }}">هل نسيت كلمة المرور؟</a><br><br>
            @endif
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label  class="checkbox" style=" color: white; display: inline-block; ">تذكرني :</label>
            </div>
  </div><br>


			<input type="submit"   value="تسجيل الدخول"><br>

		</form>


	</div>
</body>
</html>


