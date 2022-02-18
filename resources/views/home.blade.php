@extends('layouts.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="d-flex justify-content-between">
                        <h4>Perjalanan Anda!</h4>
                        <button class="btn btn-outline-warning btn-sm" style="width: 80px; height: 35px;" data-toggle="modal"
                            data-target="#exampleModal">
                            Tambah
                        </button>
                    </div>
                    <div class="table-background" style="">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jam</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Suhu</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody id="table-perjalanan">
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="image-container" style="margin-top: 100px;margin-bottom: 100px;">
                        <img class="img-fluid" src="{{ asset('assets/images/Welcome-pana.svg') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->

    <!-- Testimonials -->
    <div class="slider-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Wonderful of Indonesia</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <img class="img-fluid" style="border-radius: 15px;"
                                                    src="{{ asset('assets/images/keindahan-alam-indonesia-1-Tribun-Travel.jpg') }}"
                                                    alt="alternative">
                                            </div>
                                            <h4>Pulau Weh</h4>
                                            <p>Sabang, Indonesia</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <img class="img-fluid" style="border-radius: 15px;"
                                                    src="{{ asset('assets/images/dio-hasibuan-9ZNhQZFivZc-unsplash.jpg') }}"
                                                    alt="alternative">
                                            </div>
                                            <h4>Danau Toba</h4>
                                            <p>Sumatera Utara, Indonesia</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <img class="img-fluid" style="border-radius: 15px;"
                                                    src="{{ asset('assets/images/keindahan-alam-indonesia-3-The-Jakarta-Post.jpg') }}"
                                                    alt="alternative">
                                            </div>
                                            <h4>Pulau Belitung</h4>
                                            <p>Bangka Belitung, Indonesia</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <img class="img-fluid" style="border-radius: 15px;"
                                                    src="{{ asset('assets/images/keindahan-alam-indonesia-4-Wikipedia.jpg') }}"
                                                    alt="alternative">
                                            </div>
                                            <h4>Gunung Bromo</h4>
                                            <p>Jawa Timur, Indonesia</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Perjalanan</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-perjalanan">
                        {{ csrf_field() }}  
                        <?php date_default_timezone_set('Asia/Jakarta'); ?>
                        <input type="hidden" name="id_perjalanan" id="id_perjalanan">
                        <input type="hidden" id="status" name="status" value="Dalam Perjalanan">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputJam" class="form-label">Jam</label>
                                    <input type="text" id="jam" name="jam" value="{{ date('H.i'), old('jam') }}"
                                        class="form-control" id="exampleInputJam" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputTanggal" class="form-label">Tanggal</label>
                                    <input type="text" name="tanggal" id="tanggal"
                                        value="{{ date('d/n/y'), old('tanggal') }}" class="form-control"
                                        id="exampleInputTanggal" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputSuhu" class="form-label">Suhu Tubuh</label>
                                    <input type="text" name="suhu_tubuh" id="suhu_tubuh" value="{{ old('suhu_tubuh') }}"
                                        class="form-control" id="exampleInputSuhu" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputLokasi" class="form-label">Lokasi</label>
                                    <input type="text" name="lokasi" id="lokasi" value="{{ old('lokasi') }}"
                                        class="form-control" id="exampleInputLokasi" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        @if (auth()->user()->role == 'admin')
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="exampleInputSuhu" class="form-label">User</label>
                                        <select class="form-select" id="user_id" name="user_id"
                                            aria-label="Default select example">
                                            @foreach ($user2 as $user2)
                                                <option value="{{ $user2->id }}">{{ $user2->name }}||
                                                    {{ $user2->email }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @else
                            <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                        @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const tables = document.getElementById('table-perjalanan');
        const forms = document.getElementById('form-perjalanan');

        // window.axios.defaults.headers.common = {
        //     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        //     'X-Requested-With': 'XMLHttpRequest'
        // };

        document.addEventListener('DOMContentLoaded', function() {
            getAllData();
            $("#exampleModal").on('hidden.bs.modal', function() {
                document.getElementById('lokasi').value = "";
                document.getElementById('suhu_tubuh').value = "";
                document.getElementById('status').value = "";
                document.getElementById('user_id').value = "";
            })
        }, false);

        async function getAllData() {
            const response = await axios.get(`/api/perjalanan`);
            let dataRes = response.data;
            let content = "";
            if (dataRes.code === "00") {
                dataRes.data.map(dt => {
                    content += `
                <tr>
                    <td>${dt.tanggal}</td>
                    <td>${dt.jam}</td>
                    <td>${dt.lokasi}</td>
                    <td>${dt.suhu_tubuh}°</td>
                    <td>
                        <button class="${dt.status == 'Dalam Perjalanan' ? 'btn btn-primary btn-sm' : 'btn btn-success btn-sm'} " onClick="changeStatus(${dt.id_perjalanan},'${dt.status}')">${dt.status}</button> 
                        <button class="btn btn-warning btn-sm" onClick=edit("${dt.id_perjalanan}") >Edit</button>
                    </td>
                </tr>
            `;
                });
            } else {
                alert("Data Error!");
            }

            tables.innerHTML = content;
        }

        async function changeStatus(id_perjalanan, status ){
            let data = {
                id_perjalanan: id_perjalanan,
            }
            let param = {method : "POST",data : data};
            const response = await axios(`/api/perjalanan/change-status`,param);
            let dataRes = response.data;
            if (dataRes.code === "00") {
                getAllData();
            } else {
                alert("Error! Tidak ditemukan");
            }
        }

        async function edit(id_perjalanan) {
            const response = await axios.get(`/api/perjalanan/${id_perjalanan}`);
            let dataRes = response.data;
            if (dataRes.code === "00") {
                let data = dataRes.data;
                document.getElementById('id_perjalanan').value = data.id_perjalanan;
                document.getElementById('lokasi').value = data.lokasi;
                document.getElementById('jam').value = data.jam;
                document.getElementById('tanggal').value = data.tanggal;
                document.getElementById('suhu_tubuh').value = data.suhu_tubuh;
                document.getElementById('status').value = "Dalam Perjalanan";
                document.getElementById('user_id').value = data.user_id;
                $("#exampleModal").modal("show");
            } else {
                alert("Error! Tidak ditemukan");
            }
        }

        forms.addEventListener('submit', (event) => {
            event.preventDefault();
            let id = document.getElementById('id_perjalanan').value;
            let con = confirm("Yakin ingin "+ (id === "" ? "Simpan" : "Edit") +" data?");
            if (con) {
                const formData = new FormData(document.getElementById('form-perjalanan'));
                const config = {
                    method: "POST",
                    data: formData,
                };
                console.log("submit", formData);

                axios('/api/perjalanan/create', config)
                    .then(data => {
                        $('#exampleModal').modal('hide');
                        $('.btn-close').trigger('click');
                        getAllData();
                    });
            }
        })
    </script>
    {{-- <td>
    <button onClick=showUpdate("${dt.id}") class="btn btn-primary btn-sm">Update</button>
    <button onClick=siswaDelete("${dt.id}") class="btn btn-danger btn-sm">Delete</button>
</td> --}}
@endsection
