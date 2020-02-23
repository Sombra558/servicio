<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Proyecto;
use App\Objetivo;
use App\Alumnos;
use App\Image;
use App\Actividad;
class DocenteController extends Controller
{
    public function index(){
		return view('Docentes/Docentes');
    }
    public function contadorProyectos()
    {
        $proyectos=Proyecto::where('tutor_id',Auth::user()->id)->count();
        return $proyectos;
    }
    public function contadorProcesos()
    {
        $proyectos=Proyecto::where('estado',1)->where('tutor_id',Auth::user()->id)->count();
        return $proyectos;
    }
    public function contadorTerminados()
    {
        $proyectos=Proyecto::where('estado',2)->where('tutor_id',Auth::user()->id)->count();
        return $proyectos;
    }
    public function getProcesos()
    {
        $proyectos=Proyecto::where('estado',1)->where('tutor_id',Auth::user()->id)->get();
        return $proyectos;
    }
    public function getTerminados()
    {
        $proyectos=Proyecto::where('estado',2)->where('tutor_id',Auth::user()->id)->get();
        return $proyectos;
    }
    //Objetivos de proyectos asignados
    public function ObjetivosDelProyecto($id)
    {
        $Objetivos = Objetivo::where('proyecto_codigo','=',$id)->get();
        return $Objetivos;
    }
    public function AlumnosDelProyecto($id)
    {
        $Alumnos = Alumnos::where('proyecto_id','=',$id)->get();
        return $Alumnos;
    }
    public function ActividadesDelProyecto($id)
    {
        $Actividades = Actividad::where('proyecto_id','=',$id)->get();
        return $Actividades;
    }
    public function ImagenesDeActividad($id)
    {
        $Imagenes = Image::where('proyecto_id','=',$id)->get();
        return $Imagenes;
    }
    public function Asignarhoras(Request $request, $cedula)
    {
        Alumnos::find($cedula)->update([
            'horas_acumuladas' => request('horas_acumuladas'),
            ]);
        return;
    }
}
