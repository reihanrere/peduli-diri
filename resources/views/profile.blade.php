@extends('layouts.app')

@section('content')
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Your Profile <span class="text-warning">{{ strtoupper(auth()->user()->name) }}</span></h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-fluid mt-5 mb-3 rounded mx-auto d-block" width="200px"
                        src="{{ asset('assets/images/Image-post-amico.svg') }}" alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->

    <!-- Cards -->
    <div class="ex-cards-1 pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="margin-bottom: 40px">
                    <h3>Profile</h3>
                    <div class="profile-card-4 z-depth-3"
                        style="border: 1px solid #ffda96; padding: 10px; border-radius: 10px; box-sizing:border-box; box-shadow: 0px 5px 10px 8px rgba(0,0,0,0.1);">
                        <div class="card">
                            <div class="card-body text-center rounded-top" style="background-color: #fef2dc">
                                <div class="user-box">
                                    <img src="{{ url('image')}}/{{auth()->user()->foto}}" alt="user avatar">
                                </div>
                                <h5 class="mb-1 text-secondary">{{auth()->user()->name}}</h5>
                                <h6 class="text-secondary">{{ auth()->user()->nik }}</h6>
                            </div>
                            <div class="card-body">
                                <ul class="list-group shadow-none">
                                    <li class="list-group-item">
                                        <div class="list-details">
                                            <span>{{ auth()->user()->email }}</span>
                                            <small>Email Address</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="list-details">
                                            <span>{{ auth()->user()->username }}</span>
                                            <small>Username</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="list-details">
                                            <span>{{ auth()->user()->telp }}</span>
                                            <small>Mobile Number</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8" style="margin-bottom: 40px">
                    <h3>Edit Profile</h3>
                    <div class="d-flex"
                        style="border: 1px solid #ffda96; padding: 20px; border-radius: 10px; box-sizing:border-box; box-shadow: 0px 5px 10px 8px rgba(0,0,0,0.1);">
                        <!-- Card -->
                        <form style="width: 100%;" action="/profile/update/{{ $user->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card" style="width: 100%;">
                                <ul class="list-unstyled">
                                    <li class="d-flex">
                                        <span class="fa-stack">
                                            <span class="fas fa-circle fa-stack-2x"></span>
                                            <span class="fa-stack-1x">1</span>
                                        </span>
                                        <div class="flex-grow-1">
                                            <h5>NIK</h5>
                                            <input type="number" name="nik" value="{{ $user->nik }}"
                                                class="form-control" id="exampleFormControlInput1">
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- end of card -->
                            <div class="card" style="width: 100%; margin-left: 0;">
                                <ul class="list-unstyled">
                                    <li class="d-flex">
                                        <span class="fa-stack">
                                            <span class="fas fa-circle fa-stack-2x"></span>
                                            <span class="fa-stack-1x">2</span>
                                        </span>
                                        <div class="flex-grow-1">
                                            <h5>Email</h5>
                                            <input type="email" value="{{ $user->email }}" name="email"
                                                class="form-control" id="exampleFormControlInput1">
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- end of card -->

                            <div class="card" style="width: 100%;">
                                <ul class="list-unstyled">
                                    <li class="d-flex">
                                        <span class="fa-stack">
                                            <span class="fas fa-circle fa-stack-2x"></span>
                                            <span class="fa-stack-1x">3</span>
                                        </span>
                                        <div class="flex-grow-1">
                                            <h5>Username</h5>
                                            <input type="text" value="{{ $user->username }}" name="username"
                                                class="form-control" id="exampleFormControlInput1">
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- end of card -->

                            <div class="card" style="width: 100%;">
                                <ul class="list-unstyled">
                                    <li class="d-flex">
                                        <span class="fa-stack">
                                            <span class="fas fa-circle fa-stack-2x"></span>
                                            <span class="fa-stack-1x">4</span>
                                        </span>
                                        <div class="flex-grow-1">
                                            <h5>Password</h5>
                                            <input type="password" name="password" class="form-control"
                                                id="exampleFormControlInput1">
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- end of card -->

                            <div class="card" style="width: 100%; margin-left: 0">
                                <ul class="list-unstyled">
                                    <li class="d-flex">
                                        <span class="fa-stack">
                                            <span class="fas fa-circle fa-stack-2x"></span>
                                            <span class="fa-stack-1x">5</span>
                                        </span>
                                        <div class="flex-grow-1">
                                            <h5>Name</h5>
                                            <input type="text" value="{{ $user->name }}" name="name"
                                                class="form-control" id="exampleFormControlInput1">
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- end of card -->

                            <div class="card" style="width: 100%; margin-left: 0;">
                                <ul class="list-unstyled">
                                    <li class="d-flex">
                                        <span class="fa-stack">
                                            <span class="fas fa-circle fa-stack-2x"></span>
                                            <span class="fa-stack-1x">6</span>
                                        </span>
                                        <div class="flex-grow-1">
                                            <h5>Telp</h5>
                                            <input type="number" value="{{ $user->telp }}" name="telp"
                                                class="form-control" id="exampleFormControlInput1">
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- end of card -->

                            <div class="card" style="width: 100%;">
                                <ul class="list-unstyled">
                                    <li class="d-flex">
                                        <span class="fa-stack">
                                            <span class="fas fa-circle fa-stack-2x"></span>
                                            <span class="fa-stack-1x">7</span>
                                        </span>
                                        <div class="flex-grow-1">
                                            <h5>Foto</h5>
                                            <input type="file" name="foto" class="form-control-file"
                                                id="exampleFormControlFile1">
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- end of card -->
                            <button type="submit" class="btn btn-warning btn-sm">Submit</button>

                        </form>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-cards-1 -->
    <!-- end of cards -->
@endsection
