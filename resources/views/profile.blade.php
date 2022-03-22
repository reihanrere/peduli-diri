@extends('layouts.app')
@section('title', __('PeduliDiri.com - Profile'))
@section('content')
    <main class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="page-header">
                        <h1>Your Profile</h1>
                    </section>
                    <section class="foi-page-section pt-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="profile-card-4 z-depth-3">
                                    <div class="card">
                                        <div class="card-body text-center rounded-top">
                                            <div class="user-box">
                                                <img src="{{ url('image') 
                                            }}/{{ auth()->user()->foto }}"
                                                    alt="user avatar">
                                            </div>
                                            <h5 class="mb-1 ">{{ auth()->user()->name == null ? "Data kosong" : auth()->user()->name }}</h5>
                                            <h6 class="">{{ auth()->user()->nik == null ? "Data kosong" : auth()->user()->nik }}</h6>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group shadow-none">
                                                <li class="list-group-item">
                                                    <div class="list-details">
                                                        <span>{{ auth()->user()->email == null ? "Data kosong" : auth()->user()->email }}</span>
                                                        <small>Email Address</small>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="list-details">
                                                        <span>{{ auth()->user()->username == null ? "Data kosong" : auth()->user()->username }}</span>
                                                        <small>Username</small>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="list-details">
                                                        <span>{{ auth()->user()->telp == null ? "Data kosong" : "0" + auth()->user()->telp }}</span>
                                                        <small>Mobile Number</small>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="list-details">
                                                        <span>{{ ucfirst(auth()->user()->alamat == null ? "Data kosong" : auth()->user()->alamat) }}</span>
                                                        <small>Address</small>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <article class="blog-post media" style="padding: 10px; border: none;">
                                    <form style="width: 100%;" action="/profile/update/{{ $user->id }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="card" style="width: 100%; border: none;">
                                            <ul class="list-unstyled">
                                                <li class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h5>NIK</h5>
                                                        <input type="number" name="nik" value="{{ $user->nik }}"
                                                            class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> <!-- end of card -->
                                        <div class="card" style="width: 100%; margin-left: 0; border: none;">
                                            <ul class="list-unstyled">
                                                <li class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h5>Email</h5>
                                                        <input type="email" value="{{ $user->email }}" name="email"
                                                            class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> <!-- end of card -->

                                        <div class="card" style="width: 100%; border: none;">
                                            <ul class="list-unstyled">
                                                <li class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h5>Username</h5>
                                                        <input type="text" value="{{ $user->username }}" name="username"
                                                            class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> <!-- end of card -->

                                        <div class="card" style="width: 100%; border: none;">
                                            <ul class="list-unstyled">
                                                <li class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h5>Password</h5>
                                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                                            id="exampleFormControlInput1">
                                                    </div>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </li>
                                            </ul>
                                        </div> <!-- end of card -->

                                        <div class="card" style="width: 100%; margin-left: 0; border: none;">
                                            <ul class="list-unstyled">
                                                <li class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h5>Name</h5>
                                                        <input type="text" value="{{ $user->name }}" name="name"
                                                            class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> <!-- end of card -->

                                        <div class="card" style="width: 100%; margin-left: 0; border: none;">
                                            <ul class="list-unstyled">
                                                <li class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h5>Telp</h5>
                                                        <input type="number" value="{{ $user->telp }}" name="telp"
                                                            class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> <!-- end of card -->
                                        
                                        <div class="card" style="width: 100%; margin-left: 0; border: none;">
                                            <ul class="list-unstyled">
                                                <li class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <div class="form-group">
                                                            <h5>Alamat</h5>
                                                            <select class="form-control mt-3" id="selectProvinsi">
                                                                <option>Provinsi</option>
                                                            </select>
                                                            <select class="form-control mt-3" id="selectKota">
                                                                <option>Kota</option>
                                                            </select>
                                                            <select class="form-control mt-3" id="selectKecamatan">
                                                                <option>Kecamatan</option>
                                                            </select>
                                                            <select class="form-control mt-3" id="selectKelurahan">
                                                                <option>Kelurahan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> <!-- end of card -->

                                        <div class="card" style="width: 100%; border: none;">
                                            <ul class="list-unstyled">
                                                <li class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h5>Full Alamat</h5>
                                                        <textarea class="form-control" value="" name="alamat" id="alamat" rows="3"></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> <!-- end of card -->

                                        <div class="card" style="width: 100%; border: none;">
                                            <ul class="list-unstyled">
                                                <li class="d-flex">
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
                                </article>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <script>
        let selectProvinsi = document.getElementById('selectProvinsi');
        let selectKota = document.getElementById('selectKota');
        let selectKecamatan = document.getElementById('selectKecamatan');
        let selectKelurahan = document.getElementById('selectKelurahan');
        let alamat = document.getElementById('alamat');

        document.addEventListener("DOMContentLoaded", function () {
            fetchProvinsi();
            selectKota.style.display = "none";
            selectKecamatan.style.display = "none";
            selectKelurahan.style.display = "none";
            // fetchKota();
            // fetchKecamatan();
            // fetchKelurahan();
            getValueToAlamat();
        });

        const config = {
            method: "GET"
        };

        async function fetchProvinsi() {
            const URL = 'http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json';
            await fetch(URL, config)
                .then(response => response.json())
                .then(provinsi => {
                    if (provinsi !== null || undefined) {
                        provinsi.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectProvinsi.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                }).catch(error => alert(`Data provinsi tidak ada`));
        }

        async function fetchKota(id) {
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kota => {
                    if (kota !== null || undefined) {
                        kota.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKota.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                });
        }

        async function fetchKecamatan(id) {
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kecamatan => {
                    if (kecamatan !== null || undefined) {
                        kecamatan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKecamatan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                });
        }

        async function fetchKelurahan(id) {
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kelurahan => {
                    if (kelurahan !== null || undefined) {
                        kelurahan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKelurahan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                });
        }

        // selectProvinsi.addEventListener('change', () => {
        //     console.log(selectProvinsi.options[selectProvinsi.selectedIndex].text);
        // })

        selectProvinsi.addEventListener('change', () => {
            fetchKota(selectProvinsi.value);
            selectKota.style.display = "block";
            selectKota.innerHTML = '';
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });

        selectKota.addEventListener('change', () => {
            fetchKecamatan(selectKota.value);
            selectKecamatan.style.display = "block";
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });

        selectKecamatan.addEventListener('change', () => {
            fetchKelurahan(selectKecamatan.value);
            selectKelurahan.style.display = "block";
            selectKelurahan.innerHTML = '';
        });

        function getValueToAlamat() {
            alamat.addEventListener('change', () => {
                let alamatText = alamat.value;
                document.getElementById('alamat').value = `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKota.options[selectKota.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
                // console.log(`${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKota.options[selectKota.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);
            });
        }
    </script>
@endsection
