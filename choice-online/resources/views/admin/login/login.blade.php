<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{!! asset('/admin') !!}/login/css/style.css">
</head>
<body class="img js-fullheight" style="background-image: url({!! asset('/admin') !!}/login/images/bg.jpg);">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h2 class="heading-section">Login</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap ">
                    <form action="#" method="POST" class="signin-form">
                        @csrf
                        <div class="form-group">
                            <label for="email" class=" col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" required>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn submit px-3">Log In</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-70 text-md-right">
                                @if (Route::has('password.request'))
                                    <a class="form-control btn-link text-danger" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                    <div class="social d-flex text-center">
                        <a href="#" class="px-2 py-2 mr-md-1 rounded">
                            <span class="ion-logo-facebook mr-2"></span> Facebook</a>
                        <a href="{!! route('register') !!}" class="px-2 py-2 ml-md-1 rounded">
                            <span class="ion-logo-twitter mr-2"></span> Create An Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{!! asset('/admin') !!}/login/js/jquery.min.js"></script>
<script src="{!! asset('/admin') !!}/login/js/popper.js"></script>
<script src="{!! asset('/admin') !!}/login/js/bootstrap.min.js"></script>
<script src="j{!! asset('/admin') !!}/login/s/main.js"></script>

</body>
</html>

