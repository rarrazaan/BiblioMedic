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
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    @if(!$id->picture)
                    <img class="rounded-circle profile-widget-picture img-fluid mx-auto" width="200"
                        src="{{ 'https://i.pravatar.cc/300?nocache='. microtime() }}" alt="Photo Profile">
                    @else
                    <img class="rounded-circle profile-widget-picture img-fluid mx-auto" width="200"
                        src="{{ $id->picture }}" alt="Photo {{ $id->name }}">
                    @endif
                </div>
                <div class="card-body">
                    <label>Nama Apotek</label>
                    <p>{{ $id->name }}</p>
                    <label>Alamat</label>
                    <p>{{ $id->address }}</p>
                    <label>Jam Operasi</label>
                    <p>{{ $id->jam_operasi }}</p>
                    <label>No telepon</label>
                    <p>{{ $id->telp }}</p>
                    <div class="form-group row mb-4">
                        <label class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            <div id='map' style='width: 100%; height: 500px;'></div>
                        </div>
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
        center: [106.69972796989238, -6.238601629433243],
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

    let marker = null

    map.on('click', function(e) {
        if(marker == null){
            marker = new mapboxgl.Marker()
                .setLngLat(e.lngLat)
                .addTo(map);
        } else {
            marker.setLngLat(e.lngLat)
        }

        lk = e.lngLat
        document.getElementById("coordinate").value = e.lngLat.lat+","+e.lngLat.lng;
    });
</script>
@endsection
{{-- @push('scripts')
<script>
    $(document).ready(function() {
            $.ajax({
                type: 'GET',
                url: `{{ url('apotek') }}/${id}`,
success: (res) => {
mapboxgl.accessToken = 'pk.eyJ1Ijoic2hpbnlxMTEiLCJhIjoiY2ptY3d3OGxsMTA1dDNsbnl4OXJ1cHpkeCJ9.7fp_UEinaxDc5l8kOT6nBw';
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/satellite-streets-v11',
center: [res.data.longitude, res.data.latitude],
zoom: 16
});

const marker1 = new mapboxgl.Marker()
.setLngLat([res.data.longitude, res.data.latitude])
.addTo(map);

},
error: function(data) {
console.log(data);
}
});
});
</script>
@endpush --}}