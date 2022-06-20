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
                    @if(!$user->photo)
                    <img class="rounded-circle profile-widget-picture img-fluid mx-auto" width="200"
                        src="{{ 'https://i.pravatar.cc/300?nocache='. microtime() }}" alt="Photo Profile">
                    @else
                    <img class="rounded-circle profile-widget-picture img-fluid mx-auto" width="200"
                        src="{{ $user->photo }}" alt="Photo {{ $user->name }}">
                    @endif
                </div>
                <div class="card-body">
                    <label>Name</label>
                    <p>{{ $user->name }}</p>
                    <label>Name</label>
                    <p>{{ $user->username }}</p>
                    <label>Email</label>
                    <p>{{ $user->email }}</p>
                    <label>Role</label>
                    <p>{{ $user->role }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection