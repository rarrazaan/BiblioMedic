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

<form action="apotek/id/edit. $id" method="post" enctype="multipart/form-data">
    @csrf
    <div class="section-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Foto Apotek</h5>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div id="image-preview" class="image-preview" style="height: 250px">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" accept="image/*" name="picture" id="image-upload" value="{{old('picture') ?? $id -> picture}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div style="width: 100%; margin: 10px" id='myDiv'>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">nama apotek</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="{{old('name') ?? $id -> name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" >"{{old('address') ?? $id -> address}}"</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jam Operasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jam_operasi" value="{{old('jam_operasi') ?? $id -> jam_operasi}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="telp" value="{{old('telp') ?? $id -> telp}}">
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
