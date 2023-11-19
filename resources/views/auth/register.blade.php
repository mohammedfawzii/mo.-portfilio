@extends('layouts.layout-auth')
@section('auth')
<div class="main-form">
    <h2>Sgin Up</h2>
    <form action="{{ route('register.post') }}" method="post">
        @csrf
        <input type="text" placeholder=" Full Name" name="name">
        <input type="email" placeholder="Email" name="email">
        <input type="text" placeholder="Phone" name="phone">
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Re-Password" name="password_confirmation">
        <input type="submit" value="Sgin Up">
    </form>
    <div class="main-link-form">
        <h4><a href="{{ route("login") }}">have account</a></h4>

    </div>
</div>
@endsection
