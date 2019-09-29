@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">place Register</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['url' => '/map/place', 'method' => 'post', 'files' => true]) !!}

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
                        {!! Form::label('placeCpde', '場所', ['class' => 'control-label']) !!}
                        {!! Form::file('placeCode') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('placeName', '建物名', ['class' => 'control-label']) !!}
                        {!! Form::text('placeName') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('xCoordinate', 'X座標', ['class' => 'control-label']) !!}
                        {!! Form::text('xCoordinate') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('yCoordinate', 'y座標', ['class' => 'control-label']) !!}
                        {!! Form::text('yCoordinate') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('登録', ['class' => 'btn btn-default', 'name' => 'action']) !!}
                        {!! Form::submit('back', ['class' => 'btn btn-default', 'name' => 'action']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
