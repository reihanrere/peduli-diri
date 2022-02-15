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
                    <img class="img-fluid mt-5 mb-3 rounded mx-auto d-block" width="300px"
                        src="{{ asset('assets/images/Image-post-amico.svg') }}" alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->

    <!-- Cards -->
    <div class="ex-cards-1 pt-3 pb-3">
        <div class="container">
            {{-- <button class="btn btn-warning btn-sm">Edit Profile</button> --}}
            <div class="row">
                {{-- <div class="col-lg-6">
                    <h3>Profile</h3>
                    <div class="media d-flex"
                        style="border: 1px solid rgba(0,0,0,0.3); padding: 10px; border-radius: 10px; box-sizing:border-box;">
                        <div>
                            <img src="{{ url('image')}}/{{auth()->user()->foto}}" style="max-width: 150px; margin-right: 15px"
                                class="rounded" alt="...">
                        </div>
                        <div class="media-body">
                            <span style="font-weight: 300;">{{ auth()->user()->nik }}</span>
                            <h3 class="mt-0">{{ auth()->user()->name }}</h3>
                            <span style="font-weight: 700;">{{ auth()->user()->username }}</span>
                            <p>{{ auth()->user()->email }}</p>
                            <p style="font-weight: 700; font-size: 18px;">{{ auth()->user()->telp }}</p>
                        </div>
                    </div>

                </div> <!-- end of col --> --}}

                <div class="col-lg-4">
                    <h3>Profile</h3>
                    <div class="profile-card-4 z-depth-3"
                        style="border: 1px solid rgba(0,0,0,0.3); padding: 10px; border-radius: 10px; box-sizing:border-box;">
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
                                {{-- <div class="row text-center mt-4">
                                    <div class="col p-2">
                                        <h4 class="mb-1 line-height-5">154</h4>
                                        <small class="mb-0 font-weight-bold">Projects</small>
                                    </div>
                                    <div class="col p-2">
                                        <h4 class="mb-1 line-height-5">2.2k</h4>
                                        <small class="mb-0 font-weight-bold">Followers</small>
                                    </div>
                                    <div class="col p-2">
                                        <h4 class="mb-1 line-height-5">9.1k</h4>
                                        <small class="mb-0 font-weight-bold">Views</small>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- <div class="card-footer text-center">
                                <a href="javascript:void()" class="btn-social btn-facebook waves-effect waves-light m-1"><i
                                        class="fa fa-facebook"></i></a>
                                <a href="javascript:void()"
                                    class="btn-social btn-google-plus waves-effect waves-light m-1"><i
                                        class="fa fa-google-plus"></i></a>
                                <a href="javascript:void()"
                                    class="list-inline-item btn-social btn-behance waves-effect waves-light"><i
                                        class="fa fa-behance"></i></a>
                                <a href="javascript:void()"
                                    class="list-inline-item btn-social btn-dribbble waves-effect waves-light"><i
                                        class="fa fa-dribbble"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <h3>Edit Profile</h3>
                    <div class="d-flex"
                        style="border: 1px solid rgba(0,0,0,0.3); padding: 20px; border-radius: 10px; box-sizing:border-box;">
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

    <!-- Cards -->
    {{-- <div class="ex-cards-1 pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card">
                        <img style="max-width: 150px" src="{{ asset('assets/images/testimonial-4.jpg') }}"
                            class="img-thumbnail rounded mx-auto d-block" alt="...">
                    </div> <!-- end of card -->
                    <!-- end of card -->
                    <!-- Card -->

                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="d-flex">
                                <span class="fa-stack">
                                    <span class="fas fa-circle fa-stack-2x"></span>
                                    <span class="fa-stack-1x">1</span>
                                </span>
                                <div class="flex-grow-1">
                                    <h5>Your Name</h5>
                                    <p>{{ auth()->user()->name }}</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                    <!-- Card -->
                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="d-flex">
                                <span class="fa-stack">
                                    <span class="fas fa-circle fa-stack-2x"></span>
                                    <span class="fa-stack-1x">2</span>
                                </span>
                                <div class="flex-grow-1">
                                    <h5>Your Email</h5>
                                    <p>{{ auth()->user()->email }}</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="d-flex">
                                <span class="fa-stack">
                                    <span class="fas fa-circle fa-stack-2x"></span>
                                    <span class="fa-stack-1x">3</span>
                                </span>
                                <div class="flex-grow-1">
                                    <h5>Your Username</h5>
                                    <p>{{ auth()->user()->username }}</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                    <!-- Card -->
                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="d-flex">
                                <span class="fa-stack">
                                    <span class="fas fa-circle fa-stack-2x"></span>
                                    <span class="fa-stack-1x">4</span>
                                </span>
                                <div class="flex-grow-1">
                                    <h5>Your Telp</h5>
                                    <p>{{ auth()->user()->telp }}</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                    <!-- Card -->
                    <div class="card">
                        <ul class="list-unstyled">
                            <li class="d-flex">
                                <span class="fa-stack">
                                    <span class="fas fa-circle fa-stack-2x"></span>
                                    <span class="fa-stack-1x">5</span>
                                </span>
                                <div class="flex-grow-1">
                                    <h5>NIK</h5>
                                    <p>{{ auth()->user()->nik }}</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-cards-1 --> --}}
    <!-- end of cards -->
@endsection
