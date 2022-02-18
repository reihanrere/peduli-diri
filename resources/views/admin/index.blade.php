@extends('layouts.app')

@section('content')
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1><span class="text-warning">Tables</span></h1>
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
                    <div class="accordion" id="accordionExample">

                        <!-- Accordion Item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">User</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NIK</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Telp</th>
                                                    <th scope="col">Foto</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user as $user)
                                                    <tr>
                                                        <td>{{ $user->nik }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->username }}</td>
                                                        <td>{{ $user->telp }}</td>
                                                        <td><img width="100px"
                                                                src="{{ url('image') }}/{{ auth()->user()->foto }}"
                                                                alt="user avatar"></td>
                                                        <td>
                                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of accordion-item -->

                        <!-- Accordion Item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">Perjalanan</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Jam</th>
                                                    <th scope="col">Lokasi</th>
                                                    <th scope="col">Suhu Tubuh</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($perjalanan as $perjalanan)
                                                    <tr>
                                                        <td>{{ $perjalanan->tanggal }}</td>
                                                        <td>{{ $perjalanan->jam }}</td>
                                                        <td>{{ $perjalanan->lokasi }}</td>
                                                        <td>{{ $perjalanan->suhu_tubuh }}</td>
                                                        <td>{{ $perjalanan->status }}</td>
                                                        <td>
                                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of accordion-item -->

                        <!-- Accordion Item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">Kota</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kota as $kota)
                                                    <tr>
                                                        <td>{{ $kota->nama }}</td>
                                                        <td>
                                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of accordion-item -->

                    </div> <!-- end of accordion -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->
@endsection
