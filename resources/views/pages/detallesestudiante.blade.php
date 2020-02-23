@extends('layouts.app')

@section('content')
    

<!-- Provides the application the proper gutter -->
            <v-content>
            <v-container>

            <v-flex  class="mx-auto" xs12 md12>
                             
                             <h3>Detalles de Estudiante</h3>
                             <v-card
                        class="mx-auto"
                max-width="100%"
            >
                <v-card-title class="texteando">Nombre: {{$estudiante->nombre}} {{$estudiante->apellido}}</v-card-title>
                 <v-layout row wrap justify-space-between="">
                      <v-card-subtitle class="pb-0">Comunidad en la que Participa: {{$proyecto->comunidad}}</v-card-subtitle>
                <v-card-subtitle class="pb_0">Cédula: {{$estudiante->cedula}}</v-card-subtitle>
                 </v-layout>
                
                <v-card-text class="text--primary">
                
                <div class="texteando">Horas Acumuladas:</div>
                <div>{{$estudiante->horas_acumuladas}}
                <v-progress-linear
                color="light-blue"
                height="10"
                value="{{$progreso}}"
                striped
                ></v-progress-linear>
                </div>
                </v-card-text>
                 <v-card-text>
                     <v-layout row wrap>
                        <v-flex class="text--primary text-left" xs6>
                                <div class="texteando">Carrera:</div>
                                {{$proyecto->carrera}}
                        </v-flex>
                     
                </v-layout>
                </v-card-text>
                 <v-card-text>
                     <v-layout row wrap>
                         <v-flex class="text--primary text-left" xs6>
                                <div class="texteando">Fecha de Inicio:</div>
                                <div>{{$proyecto->inicio}}</div> 
                            </v-flex> 
                        <v-flex class="text--primary text-right" xs6>
                                <div class="texteando">Fecha fin:</div>
                                <div>{{$proyecto->fin}}</div> 
                        </v-flex>
                </v-layout>
                </v-card-text>
                
            </v-card>

          
        </v-flex>
        <v-flex  class="mx-auto" xs12 md12>
                             
                             <h3>Detalles de Proyecto</h3>
                             <v-card
                        class="mx-auto"
                max-width="100%"
            >
                <v-card-title class="texteando">Titulo: {{$proyecto->titulo}}</v-card-title>
                 <v-layout row wrap justify-space-between="">
                      <v-card-subtitle class="pb-0">Comunidad: {{$proyecto->comunidad}}</v-card-subtitle>
                <v-card-subtitle class="pb_0">Código: {{$proyecto->codigo}}</v-card-subtitle>
                 </v-layout>
                
                 <v-card-text>
                     <v-layout row wrap>
                        <v-flex class="text--primary text-left" xs6>
                                <div class="texteando">Objetivo General:</div>
                                {{$proyecto->objGeneral}}
                        </v-flex>
                        <v-flex class="text--primary text-right" xs6>
                                <div class="texteando">Estado:</div>
                           
                           
                                    @if ($proyecto->estado==1)
                                    <h2> <span style="font-size: 18px">En Proceso</span> </h2>
                                    @endif
                                    @if ($proyecto->estado==2)
                                    <h2> <span style="font-size: 18px">Terminado</span> </h2>
                                    @endif
                                    @if ($proyecto->estado==0)
                                    <h2> <span style="font-size: 18px">pendiente</span> </h2>
                                    @endif
                               
                             
                        </v-flex>
                        <v-flex class="text--primary text-center" xs12> 
                        <a href="/proyecto-get-publico/{{$proyecto->codigo}}">Detalles</a>
                        </v-flex>
                </v-layout>
                </v-card-text>
               
                
            </v-card>

          
        </v-flex>
            </v-container>
            </v-content>
           
    
@endsection