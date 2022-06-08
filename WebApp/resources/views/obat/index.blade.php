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
            <a href="{{ url('obat/create') }}" class="btn btn-icon icon-left btn-primary">
                <i class="fa fa-plus"></i>
                &nbsp; Tambah Data Obat
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table-bordered table-md table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gambar Obat</th>
                            <th>Nama Obat</th>
                            <th>Komposisi</th>
                            <th>Action</th>
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
                            <td style="width: 20%">{{ $obat->nama_obat }}</td>
                            <td style="width: 40%">{{ $obat->komposisi }}</td>
                            <td>
                                <a href="#" data-id="{{ $obat->id }}" class="detail btn btn-outline-primary">
                                    Detail
                                </a>
                                <a href="obat/{{ $obat->id }}/edit" class="btn btn-primary">
                                    Edit
                                </a>
                                <a href="#" data-id="{{ $obat->id }}" data-name="{{ $obat->name }}"
                                    class="btn btn-danger delete" data-toggle="modal" data-target="#deleteModal">Hapus
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click','.delete',function(){
        let id = $(this).attr('data-id');
        let obat_name = $(this).attr('data-name');

        $('#deleteForm').attr('action', '/obat/' + id);
        $('#obat_name').text('Hapus ' + obat_name + '?');
    });
</script>
@endsection

<div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header mb-3">
                <h5 class="modal-title" id="obat_name"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="deleteForm" method="post">
                @csrf
                @method('DELETE')
                <p style="font-size: 16px" class="text-center mt-4 mb-5">
                    Apakah Anda Yakin Ingin Menghapus Obat Ini?
                </p>

                <div class="modal-footer" style="padding-top: 5px">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Ya</button>
                </div>
            </form>
        </div>
    </div>
</div>