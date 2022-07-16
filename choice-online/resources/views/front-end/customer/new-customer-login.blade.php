@extends('front-end.master')

@section('title')
    New_Customer_login
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
                                {!! Form::open([  'method'=>'POST' ]) !!}
                                <div class="content py-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">Firstname</label>
                                                <input name="first_name" id="firstname" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastname">Lastname</label>
                                                <input name="last_name" id="lastname" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input name="email" id="email" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label for="company">Password</label>
                                                <input name="password" id="company" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="street">Confirm Password</label>
                                                <input name="confirm_password" id="street" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone Number </label>
                                                <input name="phone_number" id="phone" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row-->
                                    <div class="row">
                                        <div class="col-md-6 col-lg-2"></div>
                                        <div class="col-md-6 col-lg-8">
                                            <div class="form-group">
                                                <input  name="address" id="country" placeholder="Address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2"></div>
                                        <div class="text-center col-md-12">
                                            <button type="submit" class="btn btn-primary">
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
                                    <input type="email" name="email" class="input-text" id="email"  >
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
@endsection
