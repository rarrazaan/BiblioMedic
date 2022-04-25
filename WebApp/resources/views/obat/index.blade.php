@extends('layout.main')
@section('content')
<div class="section-header">
    <div class="aligns-items-center d-inline-block">
        <h1>{{ $title }}</h1>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($message = Session::get('failed'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="section-body">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table-bordered table-md table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Obat</th>
                            <th>Komposisi</th>
                            <th>Khasiat</th>
                            <th>Aturan Pakai</th>
                            <th>Peringatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($obats as $key => $obat)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            {{-- <td>
                                @if(!$obat->photo)
                                <img width="100" src="{{ 'https://i.pravatar.cc/300?nocache='. microtime() }}"
                            alt="Photo Profile">
                            @else
                            <img width="100" src="{{ $obat->photo }}" alt="Photo {{ $obat->name }}">
                            @endif
                            </td> --}}
                            <td>{{ $obat->nama_obat }}</td>
                            <td>{{ $obat->komposisi }}</td>
                            <td>{{ $obat->khasiat }}</td>
                            <td>{{ $obat->aturanPakai }}</td>
                            <td>{{ $obat->peringatan }}</td>
                            <td>
                                <a href="#" class="btn btn-outline-primary">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection