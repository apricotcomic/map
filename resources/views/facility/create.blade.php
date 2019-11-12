@extends('layouts.app')

@section('content')
<div class="map_container">
    <div class="row justify-content-center">
        <div class="map_col">
            <div class="card">
                <div class="card-header">Floor Show</div>

                <div class="card-body">
                    @csrf
                    <div class="form-group row">
                        <label for="floorName" class="col-md-4 col-form-label text-md-right">{{ __('floor Name') }}</label>

                        <div class="col-md-6 input-group-text">
                            {{ $floors->floorName }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="map_img">
                            <img src="{{ asset($map) }}">
                        </div>
                    </div>

                    <div class="table-resopnsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('facilityName')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input id="facilityId" type="text" class="form-control" name="facilityId" value="{{ old('facilityId') }}"></td>
                                    <td><input id="facilityName" type="text" class="form-control" name="facilityName" value="{{ old('facilityName') }}"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="button" class="btn btn-primary" onclick="location.href='{{ route('facility.store') }}'">
                                {{ __('登録') }}
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
