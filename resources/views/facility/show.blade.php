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
                                    <th>{{__('facilityID')}}</th>
                                    <th>{{__('facilityName')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($facilities))
                                    @foreach ($facilities as $facility)
                                        <tr>
                                            <td><a href="{{ route('floor.show', $facility->id) }}">{{ $facility->id }}</a></td>
                                            <td>{{ $facility->facilityName }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="button" class="btn btn-primary" onclick="location.href='{{ route('floor.edit', $floors->id) }}'">
                                {{ __('変更') }}
                            </button>
                            <form style="display:inline" action="{{ route('floor.destroy', $floors->id) }}" method="post">
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
