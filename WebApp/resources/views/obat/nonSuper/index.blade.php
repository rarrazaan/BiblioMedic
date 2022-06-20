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
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <h3 class="mt-4 mb-3 text-center" id="titleModal">Detail Obat</h3>
            <div class="modal-body" style="padding-bottom: 5px">
                <div class="form-group row mb-4">
                    <div class="col-sm-10">
                        <img id="image" class="mx-auto d-block" width="100" src="" alt="Photo Profile">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Nama Obat</label>
                    <div class="col-sm-10">
                        <input id="nama" type="text" name="nama" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Komposisi</label>
                    <div class="col-sm-10">
                        <input id="komposisi" type="text" name="komposisi" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Aturan Pakai</label>
                    <div class="col-sm-10">
                        <input id="aturanPakai" type="text" name="aturanPakai" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Khasiat</label>
                    <div class="col-sm-10">
                        <textarea id="khasiat" name="khasiat" class="form-control" style="height: 80px"
                            disabled></textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-sm-2 col-form-label">Peringatan</label>
                    <div class="col-sm-10">
                        <textarea id="peringatan" name="peringatan" class="form-control" style="height: 80px"
                            disabled></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
            $(document).on('click', '.detail', function(event) {
                event.preventDefault();
                const id = $(this).data('id');
                $.ajax({
                    type: 'GET',
                    url: `{{ url('ns/obat') }}/${id}`,
                    success: (res) => {
                        $('#titleModal').html('Detail Obat')
                        $('#nama').val(res.data.nama_obat);
                        $('#peringatan').val(res.data.peringatan);
                        $('#khasiat').val(res.data.khasiat);
                        $('#aturanPakai').val(res.data.aturanPakai);
                        $('#komposisi').val(res.data.komposisi);
                        if(res.data.image){
                            document.getElementById("image").src="storage/" + res.data.image;
                        } else {
                            document.getElementById("image").src="https://i.pravatar.cc/300?nocache='. microtime()";                         
                        }
                        $('#detailModal').modal('show');
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });
        });
</script>
@endpush