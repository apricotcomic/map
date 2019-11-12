@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

                    <form action="{{ route('facility.create') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="floor_id" class="col-md-4 col-form-label text-md-right">{{ __('Floor Id') }}</label>

                            <div class="col-md-6">
                                <input id="floor_id" type="text" class="form-control" name="floor_id" value="{{ old('floor_id') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facilityNo" class="col-md-4 col-form-label text-md-right">{{ __('facilityNo') }}</label>

                            <div class="col-md-6">
                                <input id="facilityNo" type="text" class="form-control" name="facilityNo" value="{{ old('facilityNo') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facilityName" class="col-md-4 col-form-label text-md-right">{{ __('Facility Name') }}</label>

                            <div class="col-md-6">
                                <input id="facilityName" type="text" class="form-control" name="facilityName" value="{{ old('facilityName') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facilityName" class="col-md-4 col-form-label text-md-right">{{ __('X') }}</label>

                            <div class="col-md-6">
                                <input id="XCoordinate" type="text" class="form-control" name="XCoordinate" value="{{ old('XCoordinate'), $request->x }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facilityName" class="col-md-4 col-form-label text-md-right">{{ __('Y') }}</label>

                            <div class="col-md-6">
                                <input id="YCoordinate" type="text" class="form-control" name="YCoordinate" value="{{ old('YCoordinate'), $request->y }}">
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
</div>
@endsection
