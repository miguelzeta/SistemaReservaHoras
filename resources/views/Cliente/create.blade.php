@extends('Cliente.main')
@section('title','Formulario')
@section('contenido')



    <div class="container-fluid">
        {!! Form::open(['route' => 'usuario.store', 'method' => 'POST']) !!}


        <div class="form-group">
            {!! Form::label('RutUsuario','Rut') !!}
            {!! Form::text('RutUsuario',null,['class'=>'form-control','placeholder'=> '11.111.111-1','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('NombreUsuario','Nombre') !!}
            {!! Form::text('NombreUsuario',null,['class'=>'form-control','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DireccionUsuario','Direccion') !!}
            {!! Form::text('DireccionUsuario',null,['class'=>'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('FonoUsuario', 'Telefono',['class'=>'control-label']) !!}
            {!! Form::text('FonoUsuario', null,['class'=>'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('EmailUsuario', 'Email',['class'=>'control-label']) !!}
            {!! Form::text('EmailUsuario', null,['class'=>'form-control','placeholder'=> 'ejemplo@gmail.com','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ApellidoPaternoUsuario','Apellido Paterno') !!}
            {!! Form::text('ApellidoPaternoUsuario',null,['class'=>'form-control','required']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('ApellidoMaternoUsuario','Apellido Materno') !!}
            {!! Form::text('ApellidoMaternoUsuario',null,['class'=>'form-control','required']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('ComunaUsuario','Comuna') !!}
            {!! Form::text('ComunaUsuario',null,['class'=>'form-control','required']) !!}

        </div>


        <div class="form-group">
            {!! Form::label('ContrasenaUsuario','Password') !!}
            {!! Form::password('ContrasenaUsuario',['class'=>'form-control','placeholder'=> '*************','required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password2','Password') !!}
            {!! Form::password('password2',['class'=>'form-control','placeholder'=> '*************','required']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection

