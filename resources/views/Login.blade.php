
@extends('layouts.nav')
@section('head')
    <title>Log-in</title>
    <link rel="stylesheet" href="{{ URL::asset('css/Login.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/Login.js') }}"></script>
@endsection
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <br>
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="/Register">Sign Up</a>
                    </div>
                </div>
                <div class="card-header">
                    <h3>Sign In</h3>
                </div>
                <div class="card-body">
                    <form action="/Login" method="post">
                        @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE['username'];} ?>" type="text" class="form-control" name="Username" id="Username" placeholder="username" required=""
                                onkeyup="validate(this)">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE['password'];} ?>" type="password" class="form-control" name="Password" placeholder="password" required=""
                                onkeyup="validate(this)">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox" name="remember">Remember Me
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn float-right login_btn" id="#submit">Log-in</button>
                            <!-- <input type="submit" value="Login" class="btn float-right login_btn" id="#submit"> -->
                        </div>
                        <br>
                    </form>
                </div>
                <br>
                <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
