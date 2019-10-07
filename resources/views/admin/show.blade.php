@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Add</div>

                <div class="card-body">
                    <form action="/admin/{{ $admins->id }}/edit" method="GET">
                        @csrf
                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                            <div class="col-md-6 input-group-text">
                                {{ $admins->id }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="admin_code" class="col-md-4 col-form-label text-md-right">{{ __('Admin Code') }}</label>

                            <div class="col-md-6 input-group-text">
                                {{ $admins->admin_code }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6 input-group-text">
                                {{ $admins->name }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6 input-group-text">
                                {{ $admins->role }}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-primary" onclick="location.href='{{ route('admin.edit', $admins->id) }}'">
                                    {{ __('変更') }}
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
