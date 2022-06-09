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
                    @if(!$id->image)
                    <img class="rounded-circle profile-widget-picture img-fluid mx-auto" width="200"
                        src="{{ 'https://i.pravatar.cc/300?nocache='. microtime() }}" alt="Photo Profile">
                    @else
                    <img class="rounded-circle profile-widget-picture img-fluid mx-auto" width="200"
                        src="{{ $id->image }}" alt="Photo {{ $idt->name }}">
                    @endif
                </div>
                <div class="card-body">
                    <label>Nama Obat</label>
                    <p>{{ $id->nama_obat }}</p>
                    <label>Komposisi</label>
                    <p>{{ $id->Komposisi }}</p>
                    <label>Khasiat</label>
                    <p>{{ $id->khasiat }}</p>
                    <label>Aturan Pakai</label>
                    <p>{{ $id->aturanPakai }}</p>
                    <label>peringatan</label>
                    <p>{{ $id->aturanPakai }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection