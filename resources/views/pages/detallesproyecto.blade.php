@extends('layouts.app')

@section('content')
    

<!-- Provides the application the proper gutter -->
            <v-content>
            <v-container>
            <v-flex  style="margin: 20px 0;"  class="mx-auto" xs12 md12>
                             
                             <h3>Detalles de Proyecto Servicio Comunitario</h3>
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
                        <v-card-text>
                        <v-card-text>
                     <v-layout row wrap>
                        <v-flex class="text--primary text-left" xs6>
                                <div class="texteando">Carrera: {{$proyecto->carrera}}</div>
                                
                        </v-flex>
                     
                </v-layout>
                </v-card-text>
                     <v-layout row wrap>
                         <v-flex class="text--primary text-left" xs6>
                                <div class="texteando">Fecha de Inicio: {{$proyecto->inicio}}</div>
                                <div></div> 
                            </v-flex> 
                        <v-flex class="text--primary text-right" xs6>
                                <div class="texteando">Fecha fin: {{$proyecto->fin}}</div>
                                <div></div> 
                        </v-flex>
                    </v-layout>
                    <br>
                <v-flex class="text--primary text-left" xs6>
                                <div class="texteando">Profesor:</div>
                                {{$profesor->name}}
                        </v-flex>
                </v-card-text>
                      
                </v-layout>
                </v-card-text>
               
                
            </v-card>

          
        </v-flex>
        
            
            <v-layout row wrap>
                <v-flex style="margin-bottom: 40px" xs12 md6>
                <h2 style="font-size: 24px" class="text-center">Objetivos Especificos:</h2>

                <v-card
                    class="mx-auto"
                    max-width="100%"
                    tile
                >
               
                @foreach ($objetivos as $objetivo)
                    <v-list-item>
                    <v-list-item-content>
                        <v-list-item-title style="font-size: 20px">{{$objetivo->descripcion}}</v-list-item-title>
                    </v-list-item-content>
                    </v-list-item>
                @endforeach
              
                    

                 

                   
                </v-card>
                </v-flex>
                <v-flex style="margin-bottom: 40px" xs12 md6>
                <h2 style="font-size: 24px" class="text-center">Integrantes del Proyecto:</h2>
                <v-card
                    class="mx-auto"
                    max-width="80%"
                    tile
                >
                @foreach ($estudiantes as $estudiante)
                <v-list-item two-line>
                    <v-list-item-content>
                        <v-list-item-title style="font-size: 20px">{{$estudiante->nombre}} {{$estudiante->apellido}}</v-list-item-title>
                        <v-list-item-subtitle style="font-size: 15px">Cedula: {{$estudiante->cedula}}</v-list-item-subtitle>
                    </v-list-item-content>
                    </v-list-item>
                @endforeach
                  

                    

                   
                </v-card>
                </v-flex>
                <v-flex style="margin-bottom: 40px"  xs12 md12>
                    <h2 class="text-center">Actividades del Proyecto</h2>
                    <v-expansion-panels>
                    @foreach ($actividades as $actividad)
                    <v-expansion-panel>
                      <v-expansion-panel-header style="font-size: 15px;">{{$actividad->descripcion}}</v-expansion-panel-header>
                      <v-expansion-panel-content style="font-size: 15px;">
                          Actividad creada el {{$actividad->created_at}} con una asignación de {{$actividad->horas_asignadas}} horas.
                      </v-expansion-panel-content>
                      </v-expansion-panel>
                    @endforeach
                        
                    </v-expansion-panels>
                </v-flex>
            </v-layout>
            <v-layout row wrap>
            @foreach ($imagenes as $imagen)
            <v-flex style="margin-bottom: 20px" xs12 md6>
                <v-img
                    contain
                    lazy-src="/images/{{$imagen->img}}"
                    aspect-ratio="1"
                    class="grey lighten-2"
                    max-width="500"
                    max-height="300"
                    >
                    
                </v-img>
                </v-flex>
           
            @endforeach
            </v-layout>
  </v-row>
           
            </v-container>
            </v-content>
           
    
@endsection