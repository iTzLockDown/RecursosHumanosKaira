<?php

namespace App\Http\Controllers;

use App\areas;
use App\mensaje;
use App\postulante;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministradorController extends Controller
{
    public function Postular()
    {
        $Areas = areas::pluck('descripcion', 'id');

        return view('Postulante.postular', compact('Areas'));
    }

    public function BandejaPostulantes()
    {
        $TraerTodos = postulante::join('areas','postulantes.areapostula', '=', 'areas.id')
                        ->select('postulantes.id' ,'postulantes.nombre', 'postulantes.apellidos','postulantes.profesion',
                                 'areas.descripcion','postulantes.documento','postulantes.celular','postulantes.email')
                        ->orderBy('postulantes.id', 'ASC')
                        ->where('postulantes.estado', '=', 1)
                        ->paginate(10);

        return view('BandejaPostulantes.principal', compact('TraerTodos'));
    }

    public function VerPostulante($id)
    {
        $postulante = postulante::find($id);
        $Areas = areas::pluck('descripcion', 'id');
        return view('BandejaPostulantes.hojavida', compact('postulante', 'Areas'));
    }
    public function Mensajes()
    {
        $TraerTodos = mensaje::join('users as tbremitente','mensajes.remitente', '=', 'tbremitente.id')
            ->join('users as tbreceptor','mensajes.receptor', '=', 'tbreceptor.id')
            ->select('mensajes.id' ,'mensajes.mensaje', 'tbremitente.email as remite', 'tbreceptor.email as recibe', 'mensajes.estado',
                     'mensajes.asunto', 'mensajes.fecha')
            ->orderBy('mensajes.id', 'ASC')
            ->where('mensajes.estado', '=', 1)
            ->where('mensajes.receptor',Auth::user()->id)
            ->paginate(10);
        return view('Mensaje.mensaje',  compact('TraerTodos'));
    }


    public function VerMensajes($id)
    {
        $mensaje = mensaje::join('users as tbremitente','mensajes.remitente', '=', 'tbremitente.id')
            ->join('users as tbreceptor','mensajes.receptor', '=', 'tbreceptor.id')
            ->select('mensajes.id' ,'mensajes.mensaje', 'tbremitente.email as remite', 'tbreceptor.email as recibe', 'mensajes.estado',
                'mensajes.asunto', 'mensajes.fecha')
            ->orderBy('mensajes.id', 'ASC')
            ->where('mensajes.estado', '=', 1)
            ->where('mensajes.receptor',Auth::user()->id)
            ->find($id);
        return view('Mensaje.vermensaje',  compact('mensaje'));
    }


    public function CrearMensajes()
    {
        $usuarios = \App\User::pluck('email', 'id');
        return view ('Mensaje.create', compact('usuarios'));
    }
}
