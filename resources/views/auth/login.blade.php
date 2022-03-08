@extends('layouts.app')
@section('title', __('PeduliDiri.com - Login'))
@section('content')
    <main class="page-auth mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h2 class="auth-section-title">Log In</h2>
                                <p class="auth-section-subtitle">Sign in to your account to continue.</p>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email')}}" placeholder="Email *">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <sup>*</sup></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                                            placeholder="Password *" value="{{ old('password')}}">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary btn-auth-submit" type="submit">Submit</button>
                                </form>
                                <p class="mb-0">
                                    <a href="{{ route('register')}}" class="text-dark font-weight-bold">New User? Sign Up</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="{{ asset('assets/images/login-cuate.svg') }}" alt="login" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
