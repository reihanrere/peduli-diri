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
                                    <a href="/admin/create-user" class="btn btn-success btn-sm" 
                                        style="width: 70px; padding: 5px; margin-bottom: 10px;">Tambah</a>
                                    <a href="/export-pdf" class="btn btn-primary btn-sm" 
                                        style="width: 70px; padding: 5px; margin-bottom: 10px;">
                                        <span style="margin-right: 5px">PDF</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                            <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                        </svg>
                                    </a>
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
                                                        <td>{{ $user->nik == null ? 'Data tidak tersedia' : $user->nik }}
                                                        </td>
                                                        <td>{{ $user->name == null ? 'Data tidak tersedia' : $user->name }}
                                                        </td>
                                                        <td>{{ $user->email == null ? 'Data tidak tersedia' : $user->email }}
                                                        </td>
                                                        <td>{{ $user->username == null ? 'Data tidak tersedia' : $user->username }}
                                                        </td>
                                                        <td>{{ $user->telp == null ? 'Data tidak tersedia' : $user->telp }}
                                                        </td>
                                                        <td>{{ $user->alamat == null ? 'Data tidak tersedia' : $user->alamat }}
                                                        </td>
                                                        <td>
                                                            <img src="{{ url('image') }}/{{ $user->foto }}"
                                                                alt="user avatar" style="max-width: 50px;">
                                                        </td>
                                                        <td>
                                                            <a href="/admin/edit-user/{{ $user->id }}"
                                                                class="btn btn-warning btn-sm"
                                                                style="width: 70px; padding: 5px">Edit</a>
                                                            <a href="/admin/delete-user/{{ $user->id }}"
                                                                class="btn btn-danger btn-sm"
                                                                style="width: 70px; padding: 5px">Delete</a>
                                                            <a href="/export-pdf/{{ $user->id }}"
                                                                class="btn btn-danger btn-sm"
                                                                style="width: 70px; padding: 5px">PDF</a>
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
