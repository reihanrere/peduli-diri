@extends('layouts.app')
@section('title', __('PeduliDiri.com - Home'))
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@section('content')

    <!-- Header -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="page-header">
                        <h2>Your Trip!</h2>
                    </section>
                    <section class="career-section">
                        <div class="card career-card">
                            <div class="card-body">
                                <ul class="list-group list-group-flush careers-list-group">
                                    <li class="list-group-item">
                                        <div>
                                            {{-- <h5 class="position-title">Andriod Developer</h5>
                                            <p class="position-location">London, United Kingdom</p> --}}
                                        </div>
                                        <button class="btn btn-primary btn-sm apply-btn" data-toggle="modal"
                                            data-target="#exampleModal">Add Data</button>
                                    </li>
                                    <nav style="margin-bottom: 30px;">
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                                role="tab" aria-controls="nav-home" aria-selected="true">Table</a>
                                            <a class="nav-link" id="nav-profile-tab" data-toggle="tab"
                                                href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                aria-selected="false">Map</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                            aria-labelledby="nav-home-tab">
                                            <div class="table-responsive" style="">
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
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                            aria-labelledby="nav-profile-tab">
                                            <div class="flex h-viewport-full relative overflow-hidden">
                                                <div class="flex-child-grow bg-white h-viewport-2/3 h-viewport-full-mm"
                                                    id="map2" style="width: 689.99px; min-width: 689.99px; height: 100px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Perjalanan</h5>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form id="form-perjalanan">
                        {{ csrf_field() }}
                        <?php date_default_timezone_set('Asia/Jakarta'); ?>
                        <input type="hidden" name="id_perjalanan" id="id_perjalanan">
                        <input type="hidden" id="status" name="status" value="Dalam Perjalanan">
                        <input type="hidden" id="longitude" name="longitude" value="">
                        <input type="hidden" id="latitude" name="latitude" value="">
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
                                    <input type="text" name="lokasi" id="lokasi" value="" class="form-control"
                                        id="exampleInputLokasi" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="mapbox-div-home">
                            <div class="flex h-viewport-full relative overflow-hidden ">
                                <div class="flex-child-grow bg-white h-viewport-2/3 h-viewport-full-mm" id="map"></div>
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

    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
    <script src="https://js.sentry-cdn.com/9c5feb5b248b49f79a585804c259febc.min.js" crossorigin="anonymous"></script>
    <script>
        let marker = null;
        const tables = document.getElementById('table-perjalanan');
        const forms = document.getElementById('form-perjalanan');

        mapboxgl.accessToken =
            'pk.eyJ1IjoicmVpaGFucmVyZSIsImEiOiJja3p5NXM4a3cwODdsMnVvNnJzYW1hZXZwIn0.Aiit_BvqYmU20rmc27U_Iw';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [
                106.8,
                -6.16667
            ],
            zoom: 11
        });

        const map2 = new mapboxgl.Map({
            container: 'map2',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [
                106.8,
                -6.16667
            ],
            zoom: 11
        });

        const geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl,
            marker: false,
        });



        map.addControl(geocoder, 'top-left');

        map.on('load', () => {
            // Listen for the `geocoder.input` event that is triggered when a user
            // makes a selection
            geocoder.on('result', (event) => {
                let data = event.result.place_name;
                document.getElementById('lokasi').value = data;

                if (event.result.center.length === 2) {
                    document.getElementById('longitude').value = event.result.center[0];
                    document.getElementById('latitude').value = event.result.center[1];
                    if (marker === null) {
                        marker = new mapboxgl.Marker();
                        marker.setLngLat([event.result.center[0], event.result.center[1]]).addTo(map);
                    } else {
                        marker.setLngLat([event.result.center[0], event.result.center[1]]);
                    }
                }
            });
        });

        function onMapClick(e) {
            if (marker === null) {
                        marker = new mapboxgl.Marker();
                        marker.setLngLat([e.lngLat.lng, e.lngLat.lat]).addTo(map);
                    } else {
                        marker.setLngLat([e.lngLat.lng, e.lngLat.lat]);
                    }

            document.getElementById('longitude').value = e.lngLat.lng;
            document.getElementById('latitude').value = e.lngLat.lat;
            // popup
            //     .setLatLng(e.latlng)
            //     .setContent("You clicked the map at " + e.latlng.toString())
            //     .openOn(map);

            let config = {
                method: "GET",
            }

            fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${e.lngLat.lng},${e.lngLat.lat}.json?access_token=pk.eyJ1IjoicmVpaGFucmVyZSIsImEiOiJja3p5NXM4a3cwODdsMnVvNnJzYW1hZXZwIn0.Aiit_BvqYmU20rmc27U_Iw`,
                    config)
                .then(res => res.json())
                .then(dt => {
                    let data = dt.features;
                    let poi = data.find((o, i) => { return o.id.includes("poi"); });
                    let neighborhood = data.find((o, i) => { return o.id.includes("neighborhood"); });
                    document.getElementById('lokasi').value = poi?.text + " " + neighborhood?.place_name;
                    console.log(data);
                })
        }

        map.on('click', onMapClick);

        document.addEventListener('DOMContentLoaded', function() {
            getAllData();
            $("#exampleModal").on('hidden.bs.modal', function() {
                document.getElementById('lokasi').value = "";
                document.getElementById('suhu_tubuh').value = "";
            })
            $("#exampleModal").on('shown.bs.modal', function() {
                map.resize();
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function() {
                $('map2 .mapboxgl-canvas').css('height', '100px !important');
                map2.resize();
            });
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
                        <button style="padding: 5px" class="${dt.status == 'Dalam Perjalanan' || 'dalam perjalanan' ? 'btn btn-primary btn-sm' : 'btn btn-success btn-sm'} " onClick="changeStatus(${dt.id_perjalanan},'${dt.status}')">${dt.status}</button> 
                        <button style="padding: 5px" class="btn btn-warning btn-sm" onClick=edit("${dt.id_perjalanan}") >Edit</button>
                    </td>
                </tr>
            `;

            // console.log(dt.user.name);

                    const popup = new mapboxgl.Popup({
                        offset: 25
                    }).setText(`${dt.user_id == undefined || null ? "" : dt.user.name + "." }  ${dt.lokasi}`);
                    new mapboxgl.Marker()
                        .setLngLat([dt.longitude, dt.latitude])
                        .setPopup(popup)
                        .addTo(map2);
                });
            } else {
                alert("Data Error!");
            }

            tables.innerHTML = content;
        }

        async function changeStatus(id_perjalanan, status) {
            let data = {
                id_perjalanan: id_perjalanan,
            }
            let param = {
                method: "POST",
                data: data
            };
            const response = await axios(`/api/perjalanan/change-status`, param);
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
            let con = confirm("Yakin ingin " + (id === "" ? "Simpan" : "Edit") + " data?");
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
