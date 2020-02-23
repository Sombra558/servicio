<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\User;
use App\Objetivo;
use App\Alumnos;
use App\Image;
use App\Actividad;
class AdminController extends Controller
{
    public function index(){
		return view('Admin/Admin');
    }
    public function contadorProyectos()
    {
        $proyectos=Proyecto::all()->count();
        return $proyectos;
    }
    public function contadorPendientes()
    {
        $proyectos=Proyecto::where('estado',0)->count();
        return $proyectos;
    }
    public function contadorProcesos()
    {
        $proyectos=Proyecto::where('estado',1)->count();
        return $proyectos;
    }
    public function contadorTerminados()
    {
        $proyectos=Proyecto::where('estado',2)->count();
        return $proyectos;
    }
    public function contadorDocentes()
    {
        $Docentes=User::where('rol',2)->count();
        return $Docentes;
    }
    public function getDocentes()
    {
        $Docentes=User::where('rol',2)->get();
        return $Docentes;
    }
    public function asignartutor(Request $request, $id){
      Proyecto::find($id)->update([
          'tutor_id' => request('tutor_id'),
          'estado' => 1,
          ]);
      return;
    }
    public function getPendientes()
    {
        $proyectos=Proyecto::where('estado',0)->get();
        return $proyectos;
    }
    public function getProcesos()
    {
        $proyectos=Proyecto::where('estado',1)->get();
        return $proyectos;
    }
    public function getTerminados()
    {
        $proyectos=Proyecto::where('estado',2)->get();
        return $proyectos;
    }
    public function showproyecto($id)
    {
        $Proyecto = Proyecto::find($id);
        return $Proyecto;
    }
    public function ObjetivosDelProyectoAdmin($id)
    {
        $Objetivos = Objetivo::where('proyecto_codigo','=',$id)->get();
        return $Objetivos;
    }
    public function AlumnosDelProyectoAdmin($id)
    {
        $Alumnos = Alumnos::where('proyecto_id','=',$id)->get();
        return $Alumnos;
    }
    public function ActividadesDelProyectoAdmin($id)
    {
        $Actividades = Actividad::where('proyecto_id','=',$id)->get();
        return $Actividades;
    }
    public function ImagenesDeActividadAdmin($id)
    {
        $Imagenes = Image::where('proyecto_id','=',$id)->get();
        return $Imagenes;
    }
        public function updaterole(Request $request, $id){
            User::find($id)->update([
                'rol' => $request->rol,
                ]);
            return;
        }
        public function getfuturosempleado($id)
    {
      $usuario= User::find($id);
      return $usuario;
    }
    public function getfuturosempleados()
    {
      $usuarios= User::where('rol', '=' ,3)
      ->where('is_admin',false)
      ->get();
      return $usuarios;
    }
}
