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
        <div class="card-header d-flex justify-content-between">
            <a href="{{ url('apotek/create') }}" class="btn btn-icon icon-left btn-primary">
                <i class="fa fa-plus"></i>
                &nbsp; Tambah Data Apotek
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table-bordered table-md table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Apotek</th>
                            <th>Alamat</th>
                            <th>Jam Operasi</th>
                            <th>No Telepon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apoteks as $key => $apotek)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $apotek->name }}</td>
                            <td>{{ $apotek->address }}</td>
                            <td>{{ $apotek->jam_operasi }}</td>
                            <td>{{ $apotek->telp }}</td>
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