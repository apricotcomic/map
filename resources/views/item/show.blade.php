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
                        <label for="floorName" class="col-md-4 col-form-label text-md-right">{{ __('Item Name') }}</label>

                        <div class="col-md-6 input-group-text">
                            {{ $item->itemName }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="item_id">{{ __('Item Id') }}</label>
                        <div class="col-md-2">
                            <input id="item_id" type="text" class="form-control" name="item_id" value="{{ old('item_id', $item->id) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item_name">{{ __('Item Name') }}</label>
                        <div class="col-md-6">
                            <input id="item_name" type="text" class="form-control" name="item_name" value="{{ old('item_name', $item->itemName) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item_attribute">{{ __('Attribute') }}</label>
                        <div class="col-md-6">
                            <input id="item_attribute" type="text" class="form-control" name="item_attribute" value="{{ old('item_attribute', $item->attribute) }}">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="button" class="btn btn-primary" onclick="location.href='{{ route('item.edit', $item->id) }}'">
                                {{ __('変更') }}
                            </button>
                            <form style="display:inline" action="{{ route('item.destroy', $item->id) }}" method="post">
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
