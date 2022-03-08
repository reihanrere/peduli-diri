@extends('layouts.app')
@section('title', __('PeduliDiri.com - Create User'))
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="page-header">
                        <h2>Create User</h2>
                    </section>
                    <section class="career-section">
                        <div class="card career-card">
                            <div class="card-body">
                                <form action="/admin/store-user" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <ul class="list-group list-group-flush careers-list-group">
                                        <li class="list-group-item">
                                            <div class="row" style="width: 100%">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Role</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="role" aria-label="Default select example">
                                                        <option selected>Select Role</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="siswa">Siswa</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row" style="width: 100%">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">NIK</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nik" class="form-control" id="colFormLabel">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row" style="width: 100%">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="email" class="form-control" id="colFormLabel">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row" style="width: 100%">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="name" class="form-control" id="colFormLabel">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row" style="width: 100%">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="username" class="form-control"
                                                        id="colFormLabel">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row" style="width: 100%">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="password" class="form-control" id="colFormLabel">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row" style="width: 100%">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Telp</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="telp" class="form-control" id="colFormLabel">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row" style="width: 100%">
                                                <label for="colFormLabel" class="col-sm-2 col-form-label">Kota</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="kota_id" aria-label="Default select example" data-live-search="true">
                                                        @foreach ($kota as $kota)
                                                            <option value="{{ $kota->id }}">{{ $kota->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <button type="submit" class="btn btn-primary apply-btn">Create</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
