@extends('layouts.app')

@section('content')
    

<!-- Provides the application the proper gutter -->
            <v-content>
            <v-container>

            <h1 class="title font-weight-regular">Sistema de  Control de Proyectos de
                Servicio Comunitario del Instituto Universitario Politécnico “Santiago Mariño”.
            </h1>
            <buscador accion='servicios'></buscador>
            <lista-proyectos accion='servicios'></lista-proyectos>
            </v-container>
            </v-content>
           
    
@endsection