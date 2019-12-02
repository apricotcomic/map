@extends('layouts.app')

@section('content')
<div class="map_container">
    <div class="row justify-content-center">
        <div class="map_col">
            <div class="card">
                <div class="card-header">Facility Show</div>

                <div class="card-body">
                    <form style="display:inline" action="{{ route('facility.edit', $facility->id) }}" method="get">
                        @csrf
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="edit">
                                    {{ __('変更') }}
                                </button>
                                <form style="display:inline" action="{{ route('facility.destroy', $facility->id) }}" method="post" name="delete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('削除') }}
                                    </button>
                                </form>
                                <button type="button" class="btn btn-primary" onclick="history.back()" name="back">
                                    {{ __('戻る') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facility_name">{{ __('Facility Name') }}</label>
                            <div class="col-md-6">
                                <input id="facility_name" type="text" class="form-control" name="facility_name" value="{{ old('facility_name', $facility->facilityName) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="facility_xcoordinate">{{ __('X') }}</label>
                            <div class="col-md-6">
                                <input id="facility_xcoordinae" type="text" class="form-control" name="facility_xcoordinate" value="{{ old('facility_xcoordinate', $facility->xCoordinate) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="facility_ycoordinate">{{ __('Y') }}</label>
                            <div class="col-md-6">
                                <input id="facility_ycoordinae" type="text" class="form-control" name="facility_ycoordinate" value="{{ old('facility_ycoordinate', $facility->yCoordinate) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="facility_type">{{ __('Type') }}</label>
                            <div class="col-md-6">
                                <input id="facility_type" type="text" class="form-control" name="facility_type" value="{{ old('facility_type', $facility->facilityType) }}">
                            </div>
                        </div>
                    </form>
                    <div class="table-resopnsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{__('id')}}</th>
                                    <th>{{__('ItemName')}}</th>
                                    <th>{{__('Attribute')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($items))
                                    @foreach ($items as $item)
                                        <tr>
                                            <td><a href="{{ route('item.show', $item->id) }}">{{ $item->id }}</a></td>
                                            <td>{{ $item->itemName }}</td>
                                            <td>{{ $item->attribute }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
