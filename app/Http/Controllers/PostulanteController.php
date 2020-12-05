<?php

namespace App\Http\Controllers;

use App\mensaje;
use App\postulante;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Validator;

class PostulanteController extends Controller
{
    public function store(Request $request)
    {

        $v = \Validator::make($request->all(), [
            'nombre' => 'required',
            'apellidos' => 'required',
            'documento' => 'required',
            'celular' => 'required',
            'direccion' => 'required',
            'email' => 'required|email',
            'profesion' => 'required',
            'areapostula' => 'required',
            'descripcion' => 'required',
            'hojavida' => 'required',
        ]);
        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $grabar = new postulante();
        if($request->hasFile('hojavida')){
            $file = $request->file('hojavida');
            $name_file = time().$file->getClientOriginalName();
            $file->move(public_path().'/Archivos/',$name_file);

            $grabar->hojavida = $name_file;
        }

        $grabar->usuario        =   Auth::user()->id;
        $grabar->nombre         =   $request->nombre;
        $grabar->apellidos      =   $request->apellidos;
        $grabar->documento      =   $request->documento;
        $grabar->celular        =   $request->celular  ;
        $grabar->direccion      =   $request->direccion;
        $grabar->email          =   $request->email;
        $grabar->profesion      =   $request->profesion;
        $grabar->areapostula    =   $request->areapostula;
        $grabar->descripcion    =   $request->descripcion;
        $grabar->estado         =   1;


        $grabar->save();
        Session::flash('message', 'Se ha postulado Correctamente.');
        return Redirect::route('home');
    }


    public function update(Request $request, $id)
    {
        $editar = postulante::find($id);
        $v = \Validator::make($request->all(), [
            'estado' => 'required',
            'mensaje' => 'required',
        ]);
        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $mensaje = new mensaje();

        $mensaje->remitente = Auth::user()->id ;
        $mensaje->receptor = $editar->usuario ;
        $mensaje->mensaje = $request->mensaje ;
        $mensaje->asunto = $request->asunto ;
        $mensaje->fecha = Carbon::now();
        $mensaje->estado = '1' ;


        $editar->estado         =   $request->estado;

        $mensaje->save();
        $editar->save();
        Session::flash('message', 'Se ha postulado Correctamente.');
        return Redirect::route('home');
    }
}
