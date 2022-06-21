@extends('layout.main')
@section('content')
<div class="section-header">
    <h1>{{ $title }}</h1>
</div>

@if ($errors->any())
<div class="alert alert-danger" style="padding-bottom: 2px">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ url('apotek/' . $apotek->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="section-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Upload Foto Apotek</h5>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        @if (substr($apotek->picture, 0, 4) == 'http')
                        <div id="image-preview" class="image-preview"
                            style="height: 250px; background-image: url('{{ $apotek->picture }}'); background-size: cover; background-position: center center;">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" accept="image/*" name="picture" id="image-upload" />
                        </div>
                        @else
                        <div id="image-preview" class="image-preview"
                            style="height: 250px; background-image: url('{{ asset('storage/' . $apotek->picture) }}'); background-size: cover; background-position: center center;">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" accept="image/*" name="picture" id="image-upload" />
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div style="width: 100%; margin: 10px" id='myDiv'>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Apotek</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name"
                                    value="{{old('name') ?? $apotek->name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control"
                                    name="address">{{old('address') ?? $apotek->address}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jam Operasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jam_operasi"
                                    value="{{old('jam_operasi') ?? $apotek->jam_operasi}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="telp"
                                    value="{{old('telp') ?? $apotek->telp}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Pilih Lokasi Apotek</h5>
                    </div>
                    <div class="card-body">
                        <div id="map" style="width: 100%; height: 260px"></div><br>
                        <input type="text" class="form-control" name="coordinate" id="coordinate"
                            value="{{ $coordinate_str }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
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
            zoom: 15
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

        map.on('click', function(e) {
            if (marker == null) {
                marker = new mapboxgl.Marker()
                    .setLngLat(e.lngLat)
                    .addTo(map);
            } else {
                marker.setLngLat(e.lngLat)
            }

            lk = e.lngLat
            document.getElementById("coordinate").value = e.lngLat.lat + "," + e.lngLat.lng;
        });
</script>

<script src='https://cdn.plot.ly/plotly-2.8.3.min.js'></script>
@endsection
@push('scripts')


<script>
    $("select").selectric();
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
        $(".inputtags").tagsinput('items');
</script>
@endpush