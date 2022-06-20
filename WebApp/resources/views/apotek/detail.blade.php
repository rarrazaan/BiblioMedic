@extends('layout.main')
@section('content')
<div class="section-header">
    <div class="aligns-items-center d-inline-block">
        <a href="{{ url('dashboard') }}">
            <i class="h5 fa fa-arrow-left"></i>
        </a> &nbsp; &nbsp;
        <h1>{{ $title }}</h1>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            <div id="map" style="width: 100%; height: 260px"></div><br>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                    @if(!$data->picture)
                    <img class="rounded-circle profile-widget-picture img-fluid mx-auto" width="200"
                        src="{{ 'https://i.pravatar.cc/300?nocache='. microtime() }}" alt="Photo Profile">
                    @else
                    <img class="profile-widget-picture img-fluid mx-auto" width="200"
                        src="{{ asset('storage/' . $data->picture) }}" alt="Photo {{ $data->name }}">
                    @endif
                </div>
                <div class="card-body">
                    <label>Nama Apotek</label>
                    <p>{{ $data->name }}</p>
                    <label>Alamat</label>
                    <p>{{ $data->address }}</p>
                    <label>Jam Operasi</label>
                    <p>{{ $data->jam_operasi }}</p>
                    <label>No telepon</label>
                    <p>{{ $data->telp }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="aligns-items-center d-inline-block">
                        <h1>Data Obat Apotek</h1>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table-bordered table-md table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Gambar Obat</th>
                                    <th>Nama Obat</th>
                                    <th>Harga Satuan</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($obats as $key => $obat)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        @if(!$obat->image)
                                        <img width="100" src="{{ 'https://i.pravatar.cc/300?nocache='. microtime() }}"
                                            alt="Photo Profile">
                                        @else
                                        <img width="100" src="{{ asset('storage/' . $obat->image) }}"
                                            alt="Photo {{ $obat->name }}">
                                        @endif
                                    </td>
                                    <td style="width: 40%">{{ $obat->nama_obat }}</td>
                                    <td style="width: 20%">{{ 'Rp' . number_format($obat->harga, 2, ',', '.') }}</td>
                                    <td style="width: 20%">{{ $obat->qty }}</td>
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
<script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css' rel='stylesheet' />

<link rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css">
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>

<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoic2hpbnlxMTEiLCJhIjoiY2ptY3d3OGxsMTA1dDNsbnl4OXJ1cHpkeCJ9.7fp_UEinaxDc5l8kOT6nBw';
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/satellite-streets-v11',
        center: @json($coordinate),
        zoom: 10
    });

    const geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl,
        marker: false,
        placeholder: 'Masukan kata kunci...',
        zoom: 15
    });

    map.addControl(geocoder);

    let marker = new mapboxgl.Marker()
            .setLngLat(@json($coordinate))
            .addTo(map);
</script>
@endsection