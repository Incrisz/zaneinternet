





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

     <!-- Font Icon -->
     <link rel="stylesheet" href="{{ URL::asset('public/login/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ URL::asset('public/login/css/style.css')}}">
</head>
<body>

    <!-- <div class="main"> -->
    <div style="background-color:#00feab;">


        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">{{ __('Register') }}</h2>
                        <!-- <form method="POST" class="register-form" id="register-form"> -->
                        <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value=" {{ __('Register') }}"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ URL::asset('public/login/images/signup-image.jpg') }}" alt="sing up image"></figure>
                        <a href="{{ route('login')}}" class="signup-image-link">I am already member</a>
                        <br>
                        <a href="{{ url('/')}}" class="signup-image-link">Home</a>

                    </div>
                </div>
            </div>
        </section>

   

    </div>

 <!-- JS -->
 <script src="{{ URL::asset('public/login/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('public/login/js/main.js')}}"></script>
</body>
</html>