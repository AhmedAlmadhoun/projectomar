{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('siteasset/css/main.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>  صفحة انشاء حساب</title>
    <style>

    </style>
</head>
<body>
  <!-- section انشاء حساب للمستخدم  -->
<section>
    <div class="container2">
       <b><i> <h1 style="color: white;"> انشاء حساب  </h1></i></b>
        <br>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            {{-- <input type="hidden" name="type" id="type" value="user"> --}}
            <div class="row">
              <div class="col-md-12">
                <br>
              <input name="name" type="text" id="first-name" class="form-control" placeholder="الاسم ">
                </div>
            <div class="col-md-12">
            <br>
            <input name="email" type="email" id="email" class="form-control" placeholder="الايميل">
            </div>
            <div class="col-md-12">
            <br>
            <input name="password" type="password" id="password" class="form-control" placeholder="كلمة المرور">
            </div>
            <br>
            <div class="col-md-12">
            <br>
            <input id="password-confirm" type="password" class="form-control" placeholder="تاكيد كلمة المرور" name="password_confirmation" required autocomplete="new-password">


            </div>
            </div>
          <div class="col-md-12 col-sm-6"><br>
              <b>

                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>              </div> <br>




            <div class="row">
            <div class="col-md-6">
              <b><i> <a href="https://www.facebook.com/"><input type="button" value="تسجيل الدخول عبر facebook" style="width: 29vh; margin-right: -1vh;"  class="btn btn-primary "></a></i></b>
            </div>
            <div class="col-md-6">
              <b><i> <a href="https://www.google.com/"><input type="button" value="تسجيل الدخول عبر google" style="width: 30vh; margin-right: -3vh;" class="btn btn-danger"></a> </i></b>
            </div>
            </div>
        </form>
      </div>

</section>
</body>
</html>
