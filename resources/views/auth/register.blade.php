@extends('layouts.app')
@section('title', __('PeduliDiri.com - Register'))
@section('content')
    <main class="page-auth mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h2 class="auth-section-title">Create account</h2>
                                <p class="auth-section-subtitle">Create your account to continue.</p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                            placeholder="Email" value="{{ old('email')}}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name<sup>*</sup></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name')}}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <sup>*</sup></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                                            placeholder="Password" value="{{ old('password')}}">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password <sup>*</sup></label>
                                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation"
                                            name="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation')}}">
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary btn-auth-submit" type="submit">Create account</button>
                                </form>
                                <p class="mb-0">
                                    <a href="{{ route('login')}}" class="text-dark font-weight-bold">Already have an acocunt? Sign
                                        in</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="{{ asset('assets/images/signup-cuate.svg') }}" alt="login" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
