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

<form action="{{ url('ns/apoteker/obatapotek/' . $data->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <input type="hidden" name="apotek_id" value="{{ session()->get('user')->apotek_id }}">
    <div class="section-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Upload Foto Obat</h5>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        @if (substr($data->image, 0, 4) == 'http')
                        <div id="image-preview" class="image-preview"
                            style="height: 250px; background-image: url('{{ $data->image }}'); background-size: cover; background-position: center center;">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" accept="image/*" name="image" id="image-upload" />
                        </div>
                        @else
                        <div id="image-preview" class="image-preview"
                            style="height: 250px; background-image: url('{{ asset('storage/' . $data->image) }}'); background-size: cover; background-position: center center;">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" accept="image/*" name="image" id="image-upload" />
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div style="width: 100%; margin: 10px" id='myDiv'>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Obat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_obat"
                                    value="{{old('nama_obat') ?? $data->nama_obat}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Harga Satuan</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="harga"
                                    value="{{old('harga') ?? $data->harga}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="qty"
                                    value="{{old('qty') ?? $data->qty}}">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

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