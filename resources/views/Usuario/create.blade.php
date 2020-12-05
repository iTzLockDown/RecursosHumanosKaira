@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Registrar <strong>Usuario</strong></div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-warning" role="alert">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            {!!Form::open(['route'=>'user.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Nombre</label>
                <div class="col-md-9">

                    {{ Form::text('name',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Nombre...','autocomplete'=>'off'])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Email:</label>
                <div class="col-md-9">

                    {{ Form::text('email',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Email...','autocomplete'=>'off'])}}


                </div>

            </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Contraseña:</label>
                    <div class="col-md-9">

                        {{ Form::password('password',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Contraseña...','autocomplete'=>'off'])}}


                    </div>

                </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label">Permiso</label>
                <div class="col-md-9">

                    {!! Form::select('permiso', ['3' => 'Invitado', '2' => 'Personal', '1' => 'Administrador'],null,['class'=>'form-control']) !!}

                </div>

            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-primary" type="submit" >
                <i class="fa fa-save" ></i> Enviar Mensaje</button> &nbsp;
            <a href="{{route('home')}}" class="btn btn-sm btn-danger" > <i class="fa fa-arrow-left" ></i> Regresar</a>

        </div>
        {!!Form::close()!!}
    </div>

@endsection
