    @extends('front-end.master')

    @section('title')
        CHECKOUT
    @endsection
    @section('body')
        <section class="main-container col1-layout bounceInUp animated">
            <div class="main container">
                <div class="account-login">
                    <div class="page-title">
                        <h1 class="text-center text-danger">Login or Create an Account</h1>
                    </div>
                    <fieldset class="col2-set">
                        <div class="col-1 new-users"><strong>New Customers</strong>
                            <div class="content">
                                <div class="box">
                                    {!! Form::open([ 'route'=>'customer-sign-up', 'method'=>'POST' ]) !!}
                                        <div class="content py-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstname">Firstname</label>
                                                        <input name="first_name" id="firstname" type="text" class="form-control">
                                                        <span class="text-danger text-bold">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastname">Lastname</label>
                                                        <input name="last_name" id="lastname" type="text" class="form-control">
                                                        <span class="text-danger text-bold">{{ $errors->has('last_name') ? $errors->first('last_name') : ' ' }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Email-</label><span class="text-danger" id="res"></span>
                                                            <input name="email" id="email" type="email" class="form-control ">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label for="company">Password</label>
                                                        <input name="password" id="pwd" type="password" class="form-control">
                                                        <span class="text-danger text-bold">{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="confirmPassword">Confirm Password</label>-- <span id="message"></span>
                                                        <input onkeyup='check();' name="confirm_password" id="cpwd" type="password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone_number">Phone Number </label>
                                                        <input name="phone_number" id="phone_number" type="number" class="form-control">
                                                        <span class="text-danger text-bold">{{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                                <!-- /.row-->
                                            <div class="row">
                                                <div class="col-md-6 col-lg-2"></div>
                                                <div class="col-md-6 col-lg-8">
                                                    <div class="form-group">
                                                        <input  name="address" id="address" placeholder="Address" class="form-control">
                                                        <span class="text-danger text-bold">{{ $errors->has('address') ? $errors->first('address') : ' ' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-2"></div>
                                                <div class="text-center col-md-12">
                                                    <button name="btn" type="submit" id="regBtn" class="btn btn-primary">
                                                        <i class="fa fa-user-md"></i> Register
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.row-->
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-2 registered-users"><strong>LogIn</strong>
                            <div class="content">
                                <h3 class="text-danger text-center"> {!! Session::get('message') !!}</h3>
                                <p class="text-center">If you have an account with us, please log in.</p>
                                {!! Form::open(['route'=>'customer-login', 'method'=>'POST']) !!}
                                    <ul class="form-list">
                                        <li>
                                            <label for="email">Email Address <span class="required">*</span></label>
                                            <input type="email" name="email" class="input-text" id="email2"  >
                                        </li>
                                        <li>
                                            <label for="pass">Password <span class="required">*</span></label>
                                            <input name="password" type="password"  id="pass" class="input-text" >
                                        </li>
                                    </ul>
                                    <p class="required">* Required Fields</p>
                                    <div class="buttons-set">
                                        <button id="send2" name="" type="submit" class="button login"><span>Login</span></button>
                                        <a class="forgot-word" href="#">Forgot Your Password?</a>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </fieldset>
                </div>
                <br>
            </div>
        </section>
        <script>
            var email    =   document.getElementById('email');
            email.onblur =   function (){
                var email    =   document.getElementById('email').value;
                var xmlHttp     =   new XMLHttpRequest(); 
                var serverPage  =   "http://localhost/superb-choice-online/choice-online/public/ajax-email-check/"+email;
                xmlHttp.open('GET', serverPage);
                xmlHttp.onreadystatechange  =   function (){
                    if (xmlHttp.readyState == 4 && xmlHttp.status  ==  200){
                        document.getElementById('res').innerHTML   =   xmlHttp.responseText;
                        if (xmlHttp.responseText == 'This Email Already exist!'){

                            document.getElementById("regBtn").disabled = true;
                        }else {
                            document.getElementById("regBtn").disabled = false;
                        }
                    }
                }
                xmlHttp.send(null);
            }
        </script>
        <script type="text/javascript">
            var check = function() {
                var pwd =   $('#pwd').val();
                var cpwd =   $('#cpwd').val();
                if (pwd == cpwd) {
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Password is matching';
                } else{
                    document.getElementById('message').style.color = 'red';
                    document.getElementById('message').innerHTML = 'Password is not matching';
                }
            }
    </script>
    @endsection
