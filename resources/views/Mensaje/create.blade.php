@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Redactar<strong>Mensaje</strong></div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-warning" role="alert">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            {!!Form::open(['route'=>'mensaje.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}
            <div class="form-group row">
                <label class="col-md-3 col-form-label">De:</label>
                <div class="col-md-9">

                    {{ Form::text('emisor',Auth::user()->email,$attributes = ['class'=>'form-control', 'placeholder'=>'Email...','autocomplete'=>'off','disabled'])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Para:</label>
                <div class="col-md-9">

                    {!! Form::select('receptor',$usuarios,null,['class'=>'form-control']) !!}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Asunto:</label>
                <div class="col-md-9">

                    {{ Form::text('asunto',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Asunto...','autocomplete'=>'off'])}}

                </div>

            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Mensaje</label>
                <div class="col-md-9">

                    {{ Form::textarea('mensaje',null,$attributes = ['class'=>'form-control', 'placeholder'=>'Mensaje...','autocomplete'=>'off'])}}

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
