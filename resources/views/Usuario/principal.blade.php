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
            <i class="fa fa-user"></i> Registro de Mensajes
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
                    <a  href="{{ route('crear.usuario') }}" class="btn btn-sm btn-outline-info text-right" ><i class="fa fa-mail-reply"></i> Nuevo Usuario</a>

                </div>

            </div>
            <br>
            <br>
            <table class="table table-responsive-sm">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Permiso</th>
                </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $user )
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}} </td>
                        <td>
                            @if($user->permiso==1)
                                <i class="btn btn-sm btn-info">Administrador</i>
                            @elseif($user->permiso==2)
                                <i class="btn btn-sm btn-warning">Personal</i>
                            @elseif($user->permiso==3)
                                 <i class="btn btn-sm btn-warning">Invitado</i>
                            @endif
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{--            <center>    {!! $TraerTodos->links() !!}</center>--}}
        </div>
    </div>

@endsection
