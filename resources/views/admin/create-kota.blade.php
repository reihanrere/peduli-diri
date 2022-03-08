@extends('layouts.app')
@section('title', __('PeduliDiri.com - Create Kota'))
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="page-header">
                        <h2>Create Kota</h2>
                    </section>
                    <section class="career-section">
                        <div class="card career-card">
                            <div class="card-body">
                                <form action="/admin/store-kota" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <ul class="list-group list-group-flush careers-list-group">
                                        <li class="list-group-item">
                                            <div class="row" style="width: 100%">
                                                <label for="namaKota" class="col-sm-2 col-form-label">Nama Kota</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control" id="selectKota">
                                                        <option value="">Kota/Kabupaten</option>
                                                        <option value="Kota">Kota</option>
                                                        <option value="Kabupaten">Kabupaten</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-7">
                                                    <input type="text" name="nama" value="" class="form-control"
                                                        id="namaKota">
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

    <script>
        let selectKota = document.getElementById('selectKota');
        let namaKota = document.getElementById('namaKota');

        selectKota.addEventListener('click', () => {
            selectKota.value;
        });

        namaKota.addEventListener('change', () => {
            let setSelectNama = selectKota.value + " " +  namaKota.value;

            namaKota.value = setSelectNama;
        });
    </script>
@endsection
