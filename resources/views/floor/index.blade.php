@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Floor Index</div>

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

                    <button type="button" class="btn btn-primary" onclick="location.href='{{ route('floor.create') }}'">
                        {{ __('追加') }}
                    </button>
                    <button type="button" class="btn btn-primary" onclick="location.href='{{ route('menu') }}'">
                        {{ __('戻る') }}
                    </button>

                    <div class="table-resopnsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('floorName')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($floors))
                                    @foreach ($floors as $floor)
                                        <tr>
                                            <td><a href="{{ route('floor.show', $floor->id) }}">{{ $floor->id }}</a></td>
                                            <td>{{ $floor->floorName }}</td>
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
