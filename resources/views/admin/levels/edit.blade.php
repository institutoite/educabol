@extends('adminlte::page')

@section('title', 'Educabol')

@section('content_header')
    <h1>Lista de niveles</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($level, ['route' => ['admin.levels.update',$level], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Ingrese el nombre del nivel']) !!}
                
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Actualizar nivel', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop