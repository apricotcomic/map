@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('floor.index') }}">Floor</a><br>
                    <a href="{{ route('upload') }}">Map Upload</a><br>
                    <a href="{{ route('admin.index') }}">Admin</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
