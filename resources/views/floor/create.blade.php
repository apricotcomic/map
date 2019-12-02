@extends('layouts.app')

@section('content')
<div class="map_container">
    <div class="row justify-content-center">
        <div class="map_col">
            <div class="card">
                <div class="card-header">Facility Edit</div>

                <div class="card-body">
                    <form style="display:inline" action="{{ route('floor.store') }}" method="post">
                        @csrf
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="add">
                                    {{ __('追加') }}
                                </button>
                                <button type="button" class="btn btn-primary" onclick="history.back()" name="back">
                                    {{ __('戻る') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="place_id">{{ __('Place Id') }}</label>
                            <div class="col-md-6">
                                <input id="place_id" type="text" class="form-control" name="place_id" value="{{ old('place_id') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="floor_name">{{ __('Floor Name') }}</label>
                            <div class="col-md-6">
                                <input id="floor_name" type="text" class="form-control" name="floor_name" value="{{ old('floor_name') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="map_file">{{ __('map_file') }}</label>
                            <div class="col-md-6">
                                <input id="map_file" type="text" class="form-control" name="map_file" value="{{ old('map_file') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="facility_xcoordinate">{{ __('X') }}</label>
                            <div class="col-md-6">
                                <input id="floor_xcoordinae" type="text" class="form-control" name="floor_xcoordinate" value="{{ old('floor_xcoordinate') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="facility_ycoordinate">{{ __('Y') }}</label>
                            <div class="col-md-6">
                                <input id="floor_ycoordinae" type="text" class="form-control" name="floor_ycoordinate" value="{{ old('floor_ycoordinate') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="facility_ycoordinate">{{ __('Z') }}</label>
                            <div class="col-md-6">
                                <input id="floor_zcoordinae" type="text" class="form-control" name="floor_zcoordinate" value="{{ old('floor_zcoordinate') }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
