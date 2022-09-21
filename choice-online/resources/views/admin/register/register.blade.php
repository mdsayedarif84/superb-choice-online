<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{!! asset('/admin') !!}/register/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
<link rel="stylesheet" href="{!! asset('/admin') !!}/login/css/bootstrap.min.css">
<link rel="stylesheet" href="{!! asset('/admin') !!}/register/css/style.css">
</head>
<body>
<div class="main">
    <div class="container">
        <div class="signup-content">
            <form method="POST" id="signup-form" class="signup-form" action="{{ route('register') }}">
                @csrf
                <h2>Sign up </h2>
                <p class="desc">to get discount 10% when pre - order <span>“Batman Beyond”</span></p>
                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name"/>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" required autocomplete="new-password" placeholder="Password">
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password text-danger"></span>
                    <h3 class="res"> </h3>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group ">
                    <input id="password-confirm" type="password" class="form-control"
                           name="password_confirmation" required autocomplete="new-password">
                    <span toggle="#password-confirm" class="zmdi zmdi-eye field-icon toggle-password text-danger"></span>
                </div>
                <div class="col-sm-12">
                    <div class="form-group row ">
                        <label class="col-sm-2">Role : <sup>*</sup></label>
                        <div class="col-sm-10">
                        <select class=" form-control" id="auth_type" name="auth_type">
                            <option id="choseOption">Select</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                        <span class="text-danger">{{ $errors->has('auth_type') ? $errors->first('auth_type') : ' ' }}</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span>
                        </span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                </div>
                <div class="form-group">
                    <input type="submit" class="submit-link submit" value="Register"> ||
                    <a href="{!! route('login') !!}" class="submit-link submit">LogIN</a>
                </div>
            </form>
        </div>
    </div>

</div>

<!-- JS -->
<script src="{!! asset('/admin') !!}/register/vendor/jquery/jquery.min.js"></script>
<script src="{!! asset('/admin') !!}/register/js/main.js"></script>
<script src="{!! asset('/admin') !!}/ajax/ajax.script.js"></script>
</body>
</html>
