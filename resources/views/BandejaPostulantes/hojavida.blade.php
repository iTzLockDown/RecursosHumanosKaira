@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Registros de <strong>Postulantes</strong></div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-warning" role="alert">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            {!!Form::model($postulante,['route'=>['postulante.update', $postulante->id],'method'=>'PUT','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}
                <div class="form-group row">
                <label class="col-md-3 col-form-label">Usuario</label>
                <div class="col-md-9">

                    {{ Form::text('nombre',Auth::user()->name,$attributes = ['class'=>'form-control', 'placeholder'=>'Email...','autocomplete'=>'off','disabled'])}}

                </div>

            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label">Nombre</label>
                <div class="col-md-3">

                    {{ Form::text('nombre',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Nombre...','autocomplete'=>'off','required','disabled'])}}

                </div>
                <label class="col-md-2 col-form-label text-left">Apellidos</label>
                <div class="col-md-4">
                    {{ Form::text('apellidos',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Apellidos...','autocomplete'=>'off','required','disabled'])}}

                </div>

            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label">Documento</label>
                <div class="col-md-3">

                    {{ Form::text('documento',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Documento de Identidad...','autocomplete'=>'off','required', 'maxlength'=>'8' ,'minlength'=>'8','disabled'])}}

                </div>
                <label class="col-md-2 col-form-label text-left">Telefono</label>
                <div class="col-md-4">
                    {{ Form::text('celular',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Telefono/Celular...','autocomplete'=>'off','required', 'maxlength'=>'9' ,'minlength'=>'9','disabled'])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Dirección</label>
                <div class="col-md-9">

                    {{ Form::text('direccion',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Dirección...','autocomplete'=>'off','disabled'])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Email</label>
                <div class="col-md-9">

                    {{ Form::email('email',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Email...','autocomplete'=>'off','disabled'])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Profesión</label>
                <div class="col-md-9">

                    {{ Form::text('profesion',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Profesión...','autocomplete'=>'off','disabled'])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Describete</label>
                <div class="col-md-9">

                    {{ Form::textarea('descripcion',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Describete...','autocomplete'=>'off','disabled'])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Hoja de Vida</label>
                <div class="col-md-9">

                    <a download="HojadeVida" href="Archivos/{{$postulante->hojavida}}">{{$postulante->hojavida}}</a>
                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Area a la que postula</label>
                <div class="col-md-9">

                    {!! Form::select('areapostula',$Areas,null,['class'=>'form-control','disabled']) !!}

                </div>

            </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Estado de postulacion</label>
                    <div class="col-md-9">

                        {!! Form::select('estado', ['2' => 'Cumple Requisitos', '3' => 'No Cumple Requisitos'],null,['class'=>'form-control']) !!}

                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Asunto</label>
                    <div class="col-md-9">

                        {{ Form::text('asunto',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Asunto','autocomplete'=>'off'])}}

                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Mensaje</label>
                    <div class="col-md-9">

                        {{ Form::textarea('mensaje',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Mensaje al postulante...','autocomplete'=>'off'])}}

                    </div>

                </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-primary" type="submit" >
                <i class="fa fa-save" ></i> Grabar</button> &nbsp;
            <a href="{{route('home')}}" class="btn btn-sm btn-danger" > <i class="fa fa-arrow-left" ></i> Regresar</a>

        </div>
        {!!Form::close()!!}
    </div>

@endsection
