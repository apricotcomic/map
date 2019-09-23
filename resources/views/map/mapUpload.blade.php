@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['url' => '/map/upload', 'method' => 'post', 'files' => true]) !!}

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

                    <div class="form-group">
                        {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
                        {!! Form::file('file') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('infraCode', '建物コード', ['class' => 'control-label']) !!}
                        {!! Form::text('infraCode') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('floor', 'フロア', ['class' => 'control-label']) !!}
                        {!! Form::text('floor') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('アップロード', ['class' => 'btn btn-default', 'name' => 'action']) !!}
                        {!! Form::submit('back', ['class' => 'btn btn-default', 'name' => 'action']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
