<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Objetivo;
use App\Alumnos;
use App\Image;
use App\Actividad;
use App\User;
class PublicoController extends Controller
{
    public function Proyectos()
    {
        $Objetivos = Proyecto::where('tipo','Proyecto Servicio Comunitario')->get();
        return $Objetivos;
    }
    public function Servicios()
    {
        $Objetivos = Proyecto::where('tipo','Servicio Comunitario')->get();
        return $Objetivos;
    }
    public function Alumnos()
    {
        $Alumnos = Alumnos::all();
        return $Alumnos;
    }
    public function ProyectosFind($codigo)
    {
        $proyecto = Proyecto::find($codigo);
        $objetivos = Objetivo::where('proyecto_codigo',$codigo)->get();
        $estudiantes = Alumnos::where('proyecto_id',$codigo)->get();
        $actividades = Actividad::where('proyecto_id',$codigo)->get();
        $imagenes = Image::where('proyecto_id',$codigo)->get();
        if ($proyecto->tutor_id != null) {
            $profesor = User::find($proyecto->tutor_id);
        }
        else {
            $profesor = 'no hay profesor asignado';
        }
       
        return view('/pages/detallesproyecto')
        ->with('proyecto', $proyecto)
        ->with('objetivos', $objetivos)
        ->with('estudiantes', $estudiantes)
        ->with('profesor', $profesor)
        ->with('actividades', $actividades)
        ->with('imagenes', $imagenes);

    }
    public function EstudianteFind($cedula)
    {
        $estudiante = Alumnos::find($cedula);
        $servicio = Proyecto::find($estudiante->servicio_id);
        $proyecto = Proyecto::find($estudiante->proyecto_id);
        $horas_totales_de_estudiante=$estudiante->horas_acumuladas + $estudiante->horas_acumuladas_servicio;
        $progreso = ($horas_totales_de_estudiante*100)/120;
        return view('/pages/detallesestudiante')
        ->with('estudiante', $estudiante)
        ->with('horas_totales_de_estudiante', $horas_totales_de_estudiante)
        ->with('proyecto', $proyecto)
        ->with('servicio', $servicio)
        ->with('progreso', $progreso);
    
    }
}
