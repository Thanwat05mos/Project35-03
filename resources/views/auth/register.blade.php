@extends('layouts.masterauthen')
@section('content')
<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="{{ asset ('backend/images/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>confirmation password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="confirmation password">
                        </div>
                        <div class="checkbox">
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign up</button>
                        <div class="register-link m-t-15 text-center">
                            <p><a href="{{ route ('login') }}"> login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection