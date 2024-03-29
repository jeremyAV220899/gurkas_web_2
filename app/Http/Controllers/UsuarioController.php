<?php

namespace App\Http\Controllers;

use App\Models\Administrador\Sistema\Estado;
use App\Models\RRHH\Personal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Response;

class UsuarioController extends Controller
{
    /* VISTA EDITAR PERFIL */
    public function perfil(){
        return view('usuario.perfil');
    }

    /* MOSTRAR USUARIOS REGISTRADOS CON EL ESTADO "BAJA" */
    public function indexBaja()
    {
        $datos = [
            'usuarios' => User::where('estado_id','!=','1')->get(),
            'estados' => Estado::all(),
            'empleados' => Personal::all(),
        ];
        return view('usuario.usuario-baja',$datos);
    }

    /* MOSTRAR USUARIOS REGISTRADOS CON EL ESTADO "ACTIVO" */
    public function index(){
        $datos = [
            'usuarios' => User::where('estado_id','!=','2')->get(),
            'estados' => Estado::all(),
            'empleados' => Personal::all(),
        ];
        return view('usuario.usuario',$datos);
    }

    /* GUARDAR USUARIO */
    public function store (Request $request){
        $personal = Personal::find($request->hiddenUsuario);
        if(!empty($personal)){
            $usuario = new User();
            $usuario->name=$personal->nombre_completo;
            $usuario->email=$personal->correo;
            $usuario->estado_id=$personal->estado_id;
            $usuario->dni=$personal->doc_ident;
            $usuario->imagen=$personal->imagen;
            $usuario->personal_id=$personal->id;
            $usuario->password=Hash::make($request->password);
            $usuario->save();
        }
        return redirect()->route('usuario.index');
    }

    /* TRAER DATOS DE USUARIO */
    public function edit($id){
        $usuario = User::find($id);
        $datos = [
            'usuario' => $usuario,
        ];
        return Response::json($datos);
    }

    /* ACTUALIZAR DATOS DE USUARIO */
    public function update ($id, Request $request){

        $usuario = User::find($id);
        $usuario->email=$request->email;
        $usuario->estado_id=$request->estado_id;
        if($request->password != null){
            $usuario->password=Hash::make($request->password);
        }
        $usuario->save();
        return redirect()->route('usuario.index');
    }

    /* MANDAR USUARIOS A BAJA */
    public function baja($id){
        $usuario = User::find($id);
        
        if($usuario->estado_id=='1'){
            $usuario->estado_id='2';
        }else{
            $usuario->estado_id='1';
        }
        $usuario->save();
        return redirect()->route('usuario.index');
    }

    /* RECUPERAR USUARIOS DE BAJA */
    public function recuperar($id){
        $usuario = User::find($id);
        
        if($usuario->estado_id=='2'){
            $usuario->estado_id='1';
        }else{
            $usuario->estado_id='2';
        }
        $usuario->save();
        return redirect()->route('usuario.indexBaja');
    }
}
