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
            {!!Form::open(['route'=>'postulante.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Usuario</label>
                    <div class="col-md-9">

                        {{ Form::text('nombre',Auth::user()->name,$attributes = ['class'=>'form-control', 'placeholder'=>'Email...','autocomplete'=>'off','disabled'])}}

                    </div>

                </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label">Nombre</label>
                <div class="col-md-3">

                    {{ Form::text('nombre',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Nombre...','autocomplete'=>'off','required'])}}

                </div>
                <label class="col-md-2 col-form-label text-left">Apellidos</label>
                <div class="col-md-4">
                    {{ Form::text('apellidos',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Apellidos...','autocomplete'=>'off','required'])}}

                </div>

            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label">Documento</label>
                <div class="col-md-3">

                    {{ Form::text('documento',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Documento de Identidad...','autocomplete'=>'off','required', 'maxlength'=>'8' ,'minlength'=>'8'])}}

                </div>
                <label class="col-md-2 col-form-label text-left">Telefono</label>
                <div class="col-md-4">
                    {{ Form::text('celular',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Telefono/Celular...','autocomplete'=>'off','required', 'maxlength'=>'9' ,'minlength'=>'9'])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Dirección</label>
                <div class="col-md-9">

                    {{ Form::text('direccion',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Dirección...','autocomplete'=>'off',])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Email</label>
                <div class="col-md-9">

                    {{ Form::email('email',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Email...','autocomplete'=>'off',])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Profesión</label>
                <div class="col-md-9">

                    {{ Form::text('profesion',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Profesión...','autocomplete'=>'off',])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Describete</label>
                <div class="col-md-9">

                    {{ Form::textarea('descripcion',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Describete...','autocomplete'=>'off',])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Hoja de Vida</label>
                <div class="col-md-9">

                    {{ Form::file('hojavida',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Curriculum...','autocomplete'=>'off',])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Area a la que postula</label>
                <div class="col-md-9">

                    {!! Form::select('areapostula',$Areas,null,['class'=>'form-control']) !!}

                </div>

            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-primary" type="submit" >
                <i class="fa fa-save" ></i> Postular</button> &nbsp;
            <a href="{{route('postular')}}" class="btn btn-sm btn-danger" > <i class="fa fa-arrow-left" ></i> Regresar</a>

        </div>
        {!!Form::close()!!}
    </div>

@endsection
