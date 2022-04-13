@extends('PuppyWebsiteMaster.PuppyMaster')
{{--@include('partials.Errors')--}}
@section('main')
    <div class="center">
        <h1>Login</h1>
        <form method="post" action="{{route('user.login')}}">
            @csrf
            <div class="txt_field">
                <input type="text" name="username" id="username" value="{{old('username')}}">
                @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">

            <div class="signup_link">
                Not a member? <a href="#">Signup</a>
            </div>
        </form>
    </div>
@endsection