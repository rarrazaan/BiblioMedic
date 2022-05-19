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
                            <label class="col-sm-2 col-form-label">nama obat</label>
                            <div class="col-sm-10">
                                <p></p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">komposisi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="komposisi"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">khasiat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="komposisi"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">aturan Pakai</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="aturanPakai"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">peringatan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="peringatan"></textarea>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src='https://cdn.plot.ly/plotly-2.8.3.min.js'></script>
@endsection
