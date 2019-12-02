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

                    <floor-map></floor-map>

                    <div class="form-group row">
                        <div class="col-md-1">
                            <label for="floor_id">{{ __('Floor Id') }}</label>
                        </div>
                        <div class="col-md-4">
                            <label for="facilityName">{{ __('Facility Name') }}</label>
                        </div>
                        <div class="col-md-2">
                            <label for="X">{{ __('X') }}</label>
                        </div>
                        <div class="col-md-2">
                            <label for="Y">{{ __('Y') }}</label>
                        </div>
                        <div class="col-md-3">
                            <label for="type">{{ __('Type') }}</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1">
                            <input id="floor_id" type="text" class="form-control" name="floor_id" value="{{ $request->floor_id }}">
                        </div>
                        <div class="col-md-4">
                            <input id="facility_name" type="text" class="form-control" name="facility_name" value="{{ old('facility_name') }}">
                        </div>
                        <div class="col-md-2">
                            <input id="xcoordinate" type="text" class="form-control" name="xcoordinate" value="{{ old('xcoordinate') }}">
                        </div>
                        <div class="col-md-2">
                            <input id="ycoordinate" type="text" class="form-control" name="ycoordinate" value="{{ old('ycoordinate') }}">
                        </div>
                        <div class="col-md-3">
                            <input id="facility_type" type="text" class="form-control" name="facility_type" value="{{ old('facility_type') }}">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" name='action' value='add'>
                                {{ __('登録') }}
                            </button>
                            <button type="button" class="btn btn-primary" onclick="history.back()">
                                {{ __('戻る') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
