@extends('layouts.app')
@section('title', __('PeduliDiri.com - Welcome'))
@section('header')
<div class="header-content">
    <div class="row">
        <div class="col-md-6">
            <h1>Great app that makes your trip awesome</h1>
            <a href="{{ route('register') }}" class="btn btn-primary mt-4">Sign Up</a>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/home-page.svg') }}" alt="app" width="800px"
                class="img-fluid mb-5">
        </div>
    </div>
</div>
@endsection