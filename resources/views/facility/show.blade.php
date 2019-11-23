@extends('layouts.app')

@section('content')
<div class="map_container">
    <div class="row justify-content-center">
        <div class="map_col">
            <div class="card">
                <div class="card-header">Facility Show</div>

                <div class="card-body">
                    @csrf
                    <div class="form-group row">
                        <label for="floorName" class="col-md-4 col-form-label text-md-right">{{ __('floor Name') }}</label>

                        <div class="col-md-6 input-group-text">
                            {{ $facility->facilityName }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="facility_id">{{ __('Facility Id') }}</label>
                        <div class="col-md-2">
                            <input id="facility_id" type="text" class="form-control" name="floor_id" value="{{ old('facility_id', $facility->id) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="facility_name">{{ __('Facility Name') }}</label>
                        <div class="col-md-6">
                            <input id="facility_name" type="text" class="form-control" name="facility_name" value="{{ old('facility_name', $facility->facilityName) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="facility_type">{{ __('Type') }}</label>
                        <div class="col-md-6">
                            <input id="facility_type" type="text" class="form-control" name="facility_type" value="{{ old('facility_type') }}">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="button" class="btn btn-primary" onclick="location.href='{{ route('facility.edit', $facility->id) }}'">
                                {{ __('変更') }}
                            </button>
                            <form style="display:inline" action="{{ route('facility.destroy', $facility->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    {{ __('削除') }}
                                </button>
                            </form>
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
