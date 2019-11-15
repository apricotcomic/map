@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Facility Add</div>

            <div class="card-body">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{--成功時のメッセージ--}}
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                {{-- エラーメッセージ --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif

                <form action="{{ route('facility.store') }}" method="POST">
                    @csrf
                    <img src="http://map.laravel.com/storage/map/0015F.jpg" width="800px" height="auto">
                    <div class="form-group row">
                        <div class="col-md-1">
                            <label for="floor_id">{{ __('Floor Id') }}</label>
                        </div>
                        <div class="col-md-1">
                            <label for="facilityNo">{{ __('facilityNo') }}</label>
                        </div>
                        <div class="col-md-6">
                            <label for="facilityName">{{ __('Facility Name') }}</label>
                        </div>
                        <div class="col-md-1">
                            <label for="X">{{ __('X') }}</label>
                        </div>
                        <div class="col-md-1">
                            <label for="Y">{{ __('Y') }}</label>
                        </div>
                    </div>
                        <div class="form-group row">
                            <div class="col-md-1">
                                <input id="floor_id" type="text" class="form-control" name="floor_id" value="{{ old('floor_id') }}">
                            </div>
                            <div class="col-md-1">
                                <input id="facilityNo" type="text" class="form-control" name="facilityNo" value="{{ old('facilityNo') }}">
                            </div>
                            <div class="col-md-6">
                                <input id="facilityName" type="text" class="form-control" name="facilityName" value="{{ old('facilityName') }}">
                            </div>
                            <div class="col-md-1">
                                <input id="XCoordinate" type="text" class="form-control" name="XCoordinate" value="{{ old('XCoordinate'), $request->x }}">
                            </div>
                            <div class="col-md-1">
                                <input id="YCoordinate" type="text" class="form-control" name="YCoordinate" value="{{ old('YCoordinate'), $request->y }}">
                            </div>
                        </div>
                    </div>
                </form>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" name='action' value='add'>
                            {{ __('追加') }}
                        </button>
                        <button type="button" class="btn btn-primary" onclick="history.back()">
                            {{ __('戻る') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
