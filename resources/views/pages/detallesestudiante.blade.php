@extends('layouts.app')

@section('content')
    

<!-- Provides the application the proper gutter -->
            <v-content>
            <v-container>

<<<<<<< HEAD
            <v-flex style="margin-botton:40px"  class="mx-auto" xs12 md12>
=======
            <v-flex style="margin: 20px 0;"  class="mx-auto" xs12 md12>
>>>>>>> 92e45e15b2a17149e56ba28cc7ba51e8cfd82cc3
                             
                             <h3>Detalles de Estudiante</h3>
                             <v-card
                        class="mx-auto"
                max-width="100%"
            >
                <v-card-title class="texteando">Nombre: {{$estudiante->nombre}} {{$estudiante->apellido}}</v-card-title>
                 <v-layout row wrap justify-space-between="">
                      <v-card-subtitle class="pb-0">Comunidad en la que Participa:</v-card-subtitle>
                <v-card-subtitle class="pb_0">Cédula: {{$estudiante->cedula}}</v-card-subtitle>
                 </v-layout>
                
                <v-card-text class="text--primary">
                
                <div class="texteando">Horas Acumuladas:</div>
                <div>{{$horas_totales_de_estudiante}}
                <v-progress-linear
                color="light-blue"
                height="10"
                value="{{$progreso}}"
                striped
                ></v-progress-linear>
                </div>
                </v-card-text>
                
                
                
            </v-card>

          
        </v-flex>
        @if ($proyecto)
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
                </v-card-text>
                        <v-flex class="text--primary text-center" xs12> 
                        <a href="/proyecto-get-publico/{{$proyecto->codigo}}">Detalles</a>
                        </v-flex>
                </v-layout>
                </v-card-text>
               
                
            </v-card>

          
        </v-flex>
<<<<<<< HEAD
        <v-flex  style="margin-botton:40px"  class="mx-auto" xs12 md12>
                             
                             <h3>Detalles de Proyecto de Servicio Comunitario</h3>
=======
                                    
        @endif
        @if ($servicio)
        <v-flex  style="margin: 20px 0;"  class="mx-auto" xs12 md12>
                             
                             <h3>Detalles Servicio Comunitario</h3>
>>>>>>> 92e45e15b2a17149e56ba28cc7ba51e8cfd82cc3
                             <v-card
                        class="mx-auto"
                max-width="100%"
            >
                <v-card-title class="texteando">Titulo: {{$servicio->titulo}}</v-card-title>
                 <v-layout row wrap justify-space-between="">
                      <v-card-subtitle class="pb-0">Comunidad: {{$servicio->comunidad}}</v-card-subtitle>
                <v-card-subtitle class="pb_0">Código: {{$servicio->codigo}}</v-card-subtitle>
                 </v-layout>
                
                 <v-card-text>
                     <v-layout row wrap>
                        <v-flex class="text--primary text-left" xs6>
                                <div class="texteando">Objetivo General:</div>
                                {{$servicio->objGeneral}}
                        </v-flex>
                        <v-flex class="text--primary text-right" xs6>
                                <div class="texteando">Estado:</div>
                           
                           
                                    @if ($servicio->estado==1)
                                    <h2> <span style="font-size: 18px">En Proceso</span> </h2>
                                    @endif
                                    @if ($servicio->estado==2)
                                    <h2> <span style="font-size: 18px">Terminado</span> </h2>
                                    @endif
                                    @if ($servicio->estado==0)
                                    <h2> <span style="font-size: 18px">pendiente</span> </h2>
                                    @endif
                               
                             
                        </v-flex>
                        <v-card-text>
                     <v-layout row wrap>
                        <v-flex class="text--primary text-left" xs6>
                                <div class="texteando">Carrera:{{$servicio->carrera}}</div>
                                
                        </v-flex>
                     
                </v-layout>
                </v-card-text>
                        <v-card-text>
                     <v-layout row wrap>
                         <v-flex class="text--primary text-left" xs6>
                                <div class="texteando">Fecha de Inicio: {{$servicio->inicio}}</div>
                                <div></div> 
                            </v-flex> 
                        <v-flex class="text--primary text-right" xs6>
                                <div class="texteando">Fecha fin: {{$servicio->fin}}</div>
                                <div></div> 
                        </v-flex>
                </v-layout>
                </v-card-text>
                        <v-flex class="text--primary text-center" xs12> 
                        <a href="/proyecto-get-publico/{{$servicio->codigo}}">Detalles</a>
                        </v-flex>
                </v-layout>
                </v-card-text>
               
                
            </v-card>

          
        </v-flex>
<<<<<<< HEAD
        <v-flex  class="mx-auto" xs12 md12>
                             
                             <h3>Detalles de Servicio Comunitario</h3>
                             <v-card
                        class="mx-auto"
                max-width="100%"
            >
                <v-card-title class="texteando">Titulo: {{$servicio->titulo}}</v-card-title>
                 <v-layout row wrap justify-space-between="">
                      <v-card-subtitle class="pb-0">Comunidad: {{$servicio->comunidad}}</v-card-subtitle>
                <v-card-subtitle class="pb_0">Código: {{$servicio->codigo}}</v-card-subtitle>
                 </v-layout>
                
                 <v-card-text>
                     <v-layout row wrap>
                        <v-flex class="text--primary text-left" xs6>
                                <div class="texteando">Objetivo General:</div>
                                {{$servicio->objGeneral}}
                        </v-flex>
                        <v-flex class="text--primary text-right" xs6>
                                <div class="texteando">Estado:</div>
                           
                           
                                    @if ($servicio->estado==1)
                                    <h2> <span style="font-size: 18px">En Proceso</span> </h2>
                                    @endif
                                    @if ($servicio->estado==2)
                                    <h2> <span style="font-size: 18px">Terminado</span> </h2>
                                    @endif
                                    @if ($servicio->estado==0)
                                    <h2> <span style="font-size: 18px">pendiente</span> </h2>
                                    @endif
                               
                             
                        </v-flex>
                        <v-flex class="text--primary text-center" xs12> 
                        <a href="/proyecto-get-publico/{{$servicio->codigo}}">Detalles</a>
                        </v-flex>
                </v-layout>
                </v-card-text>
               
                
            </v-card>

          
        </v-flex>
=======
        @endif
>>>>>>> 92e45e15b2a17149e56ba28cc7ba51e8cfd82cc3
            </v-container>
            </v-content>
           
    
@endsection