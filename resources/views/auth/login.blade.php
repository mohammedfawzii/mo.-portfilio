@extends('layouts.layout-auth')
@section('auth')
<div class="main-form">
    <h2>Sign In</h2>
    <form action="{{ route('login.post') }}" method="post">
        @csrf
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <input type="submit" value="Sign in">
    </form>
    <div class="main-link-form">
        <h4><a href="{{ route('register') }}">create account</a></h4>
        <h4><a href="">forget password</a></h4>
    </div>
</div>
@endsection
