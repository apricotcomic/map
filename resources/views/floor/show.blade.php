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

                    <floor-map></floor-map>
                    <div class="table-resopnsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{__('FacilityNo')}}</th>
                                    <th>{{__('FacilityName')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($facilities))
                                    @foreach ($facilities as $facility)
                                        <tr>
                                            <td><a href="{{ route('facility.show', $facility->id) }}">{{ $facility->id }}</a></td>
                                            <td>{{ $facility->facilityName }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <form action="{{ route('facility.add') }}" method="post">
                                @csrf
                                <input type="hidden" name="floor_id" value="{{ $floors->id }}">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('追加') }}
                                </button>

                                <button type="button" class="btn btn-primary" onclick="history.back()">
                                    {{ __('戻る') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
