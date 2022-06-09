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
                    <label>Name</label>
                    <p>{{ $id->name }}</p>
                    <label>Alamat</label>
                    <p>{{ $id->address }}</p>
                    <label>Jam Operasi</label>
                    <p>{{ $id->jam_operasi }}</p>
                    <label>No telepon</label>
                    <p>{{ $id->telp }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection