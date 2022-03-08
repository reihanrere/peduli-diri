@extends('layouts.app')
@section('title', __('PeduliDiri.com - Tables'))
@section('content')
    <main>
        <div class="container">
            <section class="foi-page-section">
                <div class="row">
                    <div class="col-md-4 mb-5 mb-md-0">
                        <img src="{{ asset('assets/images/mobile-development-cuate.svg') }}" alt="faq"
                            class="img-fluid" width="424px">
                    </div>
                    <div class="col-md-8">
                        <h2 class="feature-faq-title">Tables</h2>
                        <div class="card feature-faq-card">
                            <div class="card-header bg-white" id="featureFaqOneTitle">
                                <a href="#featureFaqOneCollapse" class="d-flex align-items-center collapsed"
                                    data-toggle="collapse" aria-expanded="false">
                                    <h5 class="mb-0">User</h5> <i class="far fa-plus-square ml-auto"></i>
                                </a>
                            </div>
                            <div id="featureFaqOneCollapse" class="collapse" aria-labelledby="featureFaqOneTitle"
                                style="">
                                <div class="card-body">
                                    <a href="/admin/create-user" class="btn btn-success btn-sm" class="btn btn-danger btn-sm"
                                        style="width: 70px; padding: 5px; margin-bottom: 10px;">Tambah</a>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>NIK</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Username</th>
                                                    <th>Telp</th>
                                                    <th>Alamat</th>
                                                    <th>Foto</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $user->nik }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->username }}</td>
                                                        <td>{{ $user->telp }}</td>
                                                        <td>{{ $user->alamat }}</td>
                                                        <td>
                                                            <img src="{{ url('image') }}/{{ $user->foto }}"
                                                            alt="user avatar" style="max-width: 50px;">
                                                        </td>
                                                        <td>
                                                            <a href="/admin/edit-user/{{$user->id}}" class="btn btn-warning btn-sm"
                                                                style="width: 70px; padding: 5px">Edit</a>
                                                            <a href="/admin/delete-user/{{$user->id}}" class="btn btn-danger btn-sm"
                                                                style="width: 70px; padding: 5px">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
