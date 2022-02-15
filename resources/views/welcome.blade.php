@extends('layouts.app')

@section('content')
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h1 class="h1-large">The #1 x for <span class="replace-me">Traveller, Touring, Around The World</span></h1>
                    <a class="btn-solid-lg" style="margin-top: 20px;" href="{{route('register')}}">Sign up for free</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="{{asset('assets/images/Adventure-pana.svg')}}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->
@endsection