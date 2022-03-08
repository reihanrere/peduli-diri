@extends('layouts.app')
@section('title', __('PeduliDiri.com - Create Kota'))
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="page-header">
                        <h2>Update Kota</h2>
                    </section>
                    <section class="career-section">
                        <div class="card career-card">
                            <div class="card-body">
                                <form action="/admin/update-kota/{{ $kota->id }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <ul class="list-group list-group-flush careers-list-group">
                                        <li class="list-group-item">
                                            <div class="row" style="width: 100%">
                                                <label for="namaKota" class="col-sm-2 col-form-label">Nama Kota</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="nama" value="{{ $kota->nama }}" class="form-control"
                                                        id="namaKota">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <button type="submit" class="btn btn-primary apply-btn">Update</button>
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
