@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Fecha de envio:<strong>{{$mensaje->fecha}}</strong></div>
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
                <label class="col-md-3 col-form-label">De:</label>
                <div class="col-md-9">

                    {{ Form::text('nombre',$mensaje->remite,$attributes = ['class'=>'form-control', 'placeholder'=>'Email...','autocomplete'=>'off','disabled'])}}

                </div>

            </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Para:</label>
                    <div class="col-md-9">

                        {{ Form::text('nombre',$mensaje->receptor,$attributes = ['class'=>'form-control', 'placeholder'=>'Email...','autocomplete'=>'off','disabled'])}}

                    </div>

                </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Asunto:</label>
                <div class="col-md-9">

                    {{ Form::text('nombre',$mensaje->asunto,$attributes = ['class'=>'form-control', 'placeholder'=>'Email...','autocomplete'=>'off','disabled'])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Mensaje</label>
                <div class="col-md-9">

                    {{ Form::textarea('mensaje',$mensaje->mensaje,$attributes = ['class'=>'form-control', 'placeholder'=>'Mensaje al postulante...','autocomplete'=>'off'])}}

                </div>

            </div>

        </div>
        <div class="card-footer">

            <a href="{{route('home')}}" class="btn btn-sm btn-danger" > <i class="fa fa-arrow-left" ></i> Regresar</a>

        </div>
        {!!Form::close()!!}
    </div>

@endsection
