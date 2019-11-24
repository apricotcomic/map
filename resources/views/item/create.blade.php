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

                    <form action="{{ route('item.store') }}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="itemName" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="itemName" type="text" class="form-control" name="itemName" value="{{ old('itemName') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="itemAttribute" class="col-md-4 col-form-label text-md-right">{{ __('Attribute') }}</label>
                            <div class="col-md-6">
                                <input id="itemAttribute" type="text" class="form-control" name="itemAttribute" value="{{ old('itemAttribute') }}">
                            </div>
                        </div>

                        <div class="form-group row">
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
</div>
@endsection
