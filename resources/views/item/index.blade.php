@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Items Index</div>

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

                    <button type="button" class="btn btn-primary" onclick="location.href='{{ route('item.create') }}'">
                        {{ __('追加') }}
                    </button>
                    <button type="button" class="btn btn-primary" onclick="history.back()">
                        {{ __('戻る') }}
                    </button>

                    <div class="table-resopnsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('ItemName')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($items))
                                    @foreach ($items as $item)
                                        <tr>
                                            <td><a href="{{ route('item.show', $item->id) }}">{{ $item->id }}</a></td>
                                            <td>{{ $item->itemName }}</td>
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
