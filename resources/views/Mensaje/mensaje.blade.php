@extends('layouts.app')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role = "alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <label class="text-center"> {{Session::get('message')}}</label>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <i class="fa fa-user"></i> Registro de Postulantes
        </div>

        <div class="card-body">

            <div class="form-group row">
                <label class="col-md-1 col-form-label"></label>

                <div class="col-md-5">
                    {!!Form::open(['route'=>'home','method'=>'GET','role'=>'form','enctype'=>'multipart/form-data','files' => true])!!}

                    <input type="text" id="txtBuscar" name="nombre" class="form-control" placeholder="Buscar ..." autocomplete="off">

                </div>
                <div class="col-md-2 col-form-label text-left">
                    <button class="btn btn-tumblr btn-sm" id="btnBuscar" type="submit"><i class="fa fa-search"></i> Buscar</button>
                    {!!Form::close()!!}
                </div>

                <div class="col-md-4 text-right">
                    <a  href="{{ route('crear.mensajes') }}" class="btn btn-sm btn-outline-info text-right" ><i class="fa fa-mail-reply"></i> Nuevo Mensaje</a>

                </div>

            </div>
            <br>
            <br>
            <table class="table table-responsive-sm">
                <thead>
                <tr>
                    <th>Emisor</th>
                    <th>Asunto</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($TraerTodos as $mensajes )
                    <tr>
                        <td>{{$mensajes->remite}}</td>
                        <td>{{$mensajes->asunto}} </td>
                        <td>{{$mensajes->fecha}} </td>
                        <td>
                            @if($mensajes->estado==1)
                                <a class="btn btn-sm btn-success">No Revisado</a>
                            @else
                                <a class="btn btn-sm btn-dark">Revisado</a>
                            @endif
                        <td>
                            <a href="{{route('ver.mensajes', array($mensajes->id))}}" title="Ver Postulante" class="btn btn-outline-info btn-sm"> <i class="fa fa-paste"></i> Ver</a>
                            <a href="{{ route('bandeja' ,$parameters = $mensajes->id)}}" onclick="return confirm('Esta seguro de eliminar el mensaje.')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" title="Eliminar Mensaje"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{--            <center>    {!! $TraerTodos->links() !!}</center>--}}
        </div>
    </div>

@endsection
