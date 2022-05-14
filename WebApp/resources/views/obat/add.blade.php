@extends('layout.main')
@section('content')
<div class="section-header">
    {{-- <h1>{{ $title }}</h1> --}}
</div>

<div class="section-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div style="width: 100%; margin: 10px" id='myDiv'>
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kode</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tipe</label>
                            <div class="col-sm-10">
                                <select class="form-select">
                                    <option selected>Pilih Tipe Obat</option>
                                    <option value="1">Kapsul</option>
                                    <option value="2">Tablet</option>
                                    <option value="3">Sirup</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Harga Satuan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src='https://cdn.plot.ly/plotly-2.8.3.min.js'></script>
@endsection