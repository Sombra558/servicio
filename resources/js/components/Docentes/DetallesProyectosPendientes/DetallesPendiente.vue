<template>
    <div>
   
                        <v-dialog
                        v-model="dialog"
                        width="500"
                        >
                                <template v-slot:activator="{ on }">
                                    <v-btn
                                    color="blue lighten-2"
                                    dark
                                    v-on="on"
                                    >
                                    Agregar Objetivo Especifico
                                    </v-btn>
                                </template>

                                <v-card>
                                    <v-card-title
                                    class="headline grey lighten-2"
                                    primary-title
                                    >
                                    Agregando Objetivo
                                    </v-card-title>
                                    <v-form @submit.prevent="CrearObjetivo(proyecto.codigo)" >
                            <v-container fluid grid-list-md text-xs-center>
                            <v-layout row wrap>
                                 
                               <v-flex  md12>

                                     <v-text-field
                                label='Objetivo Especifico'
                                 v-model="objetivo.descripcion"
                                type='text'
                             />
                                </v-flex>
                        
                             
                              
                            <v-flex xs12 md12>
                                <v-divider></v-divider>
                             <v-btn type="submit"  @click="dialog = false">Crear Objetivo</v-btn>
                            </v-flex>
                           
                             </v-layout>
                             </v-container> 
                             </v-form>
                                    

                                    <v-divider></v-divider>

                                    <v-card-actions>
                                    <v-spacer></v-spacer>
                                    <v-btn
                                        color="primary"
                                        text
                                        @click="dialog = false"
                                    >
                                        Cerrar
                                    </v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-dialog>
                            <v-dialog
                        v-model="dialog1"
                        width="500"
                        >
                                <template v-slot:activator="{ on }">
                                    <v-btn
                                    color="blue lighten-2"
                                    dark
                                    v-on="on"
                                    >
                                    Integrar Estudiante
                                    </v-btn>
                                </template>

                                <v-card>
                                    <v-card-title
                                    class="headline grey lighten-2"
                                    primary-title
                                    >
                                    Agregando Estudiante
                                    </v-card-title>
                                    <v-form @submit.prevent="IntegrarAlumno(proyecto.codigo)" >
                            <v-container fluid grid-list-md text-xs-center>
                            <v-layout row wrap>
                                 
                                <v-flex  md12>

                                     <v-text-field
                                label='Nombre'
                                 v-model="estudiante.nombre"
                                type='text'
                             />
                                </v-flex>
                                 <v-flex  md12>

                                     <v-text-field
                                label='Apellido'
                                 v-model="estudiante.apellido"
                                type='text'
                             />
                                </v-flex>
                                 <v-flex  md12>

                                     <v-text-field
                                label='Cédula'
                                 v-model="estudiante.cedula"
                                type='number'
                             />
                                </v-flex>
                        
                             
                              
                            <v-flex xs12 md12>
                                <v-divider></v-divider>
                             <v-btn type="submit"  @click="dialog1 = false">Agregar Estudiante</v-btn>
                            </v-flex>
                           
                             </v-layout>
                             </v-container> 
                             </v-form>
                                    

                                    <v-divider></v-divider>

                                    <v-card-actions>
                                    <v-spacer></v-spacer>
                                    <v-btn
                                        color="primary"
                                        text
                                        @click="dialog1 = false"
                                    >
                                        Cerrar
                                    </v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-dialog>
                            <v-dialog
                        v-model="dialog3"
                        width="500"
                        >
                                <template v-slot:activator="{ on }">
                                    <v-btn
                                    color="blue lighten-2"
                                    dark
                                    v-on="on"
                                    >
                                    Agregar Actividad
                                    </v-btn>
                                </template>

                                <v-card>
                                    <v-card-title
                                    class="headline grey lighten-2"
                                    primary-title
                                    >
                                    Agregando Actividad
                                    </v-card-title>
                                    <v-form @submit.prevent=" AgregarActividad(proyecto.codigo)" >
                            <v-container fluid grid-list-md text-xs-center>
                            <v-layout row wrap>
                                 <v-flex  md12>

                                     <v-text-field
                                        label='Descripcion'
                                        v-model="actividad.descripcion"
                                        type='text'
                                    />
                                </v-flex>
                                 <v-flex  md12>

                                     <v-text-field
                                label='horas_asignadas'
                                v-model="actividad.horas_asignadas"
                                type='number'
                             />
                                </v-flex>
                        
                             
                              
                            <v-flex xs12 md12>
                                <v-divider></v-divider>
                             <v-btn type="submit"  @click="dialog3 = false">Agregar Actividad</v-btn>
                            </v-flex>
                           
                             </v-layout>
                             </v-container> 
                             </v-form>
                                    

                                    <v-divider></v-divider>

                                    <v-card-actions>
                                    <v-spacer></v-spacer>
                                    <v-btn
                                        color="primary"
                                        text
                                        @click="dialog3 = false"
                                    >
                                        Cerrar
                                    </v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-dialog>
                            <v-dialog
                        v-model="dialog2"
                        width="500"
                        >
                                <template v-slot:activator="{ on }">
                                    <v-btn
                                    color="blue lighten-2"
                                    dark
                                    v-on="on"
                                    >
                                    Agregar Imagen
                                    </v-btn>
                                </template>

                                <v-card>
                                    <v-card-title
                                    class="headline grey lighten-2"
                                    primary-title
                                    >
                                    Agregando Imagen
                                    </v-card-title>
                                    <v-form @submit.prevent="AgregarImagen(proyecto.codigo)" >
                            <v-container fluid grid-list-md text-xs-center>
                            <v-layout row wrap>
                                 <v-select
                                            label="Actividades"
                                            :items="filteredActividades"
                                           
                                            v-model="imageni.semana"
                                            item-text="descripcion"
                                            item-value='actividad_id'
                                        ></v-select>
                                <v-flex xs12 md12>
                                   <input class="completo" type="file" @change="obtenerimagen" accept="image/*">
                                </v-flex>
                              
                            <v-flex xs12 md12>
                                <v-divider></v-divider>
                             <v-btn type="submit"  @click="dialog2 = false">Agregar Imagen</v-btn>
                            </v-flex>
                           
                             </v-layout>
                             </v-container> 
                             </v-form>
                                <v-container fluid grid-list-md text-xs-center>
                <v-layout row wrap >     
                <v-flex  xs10 offset-xs1>
                     <v-layout row wrap >
                         <v-flex xs12>
                             <figure><img height="180px" width="100%" :src="imagen"></figure>
                         </v-flex>
                     </v-layout>
                     
                </v-flex>
                </v-layout>
                </v-container>
                                    <v-divider></v-divider>

                                    <v-card-actions>
                                    <v-spacer></v-spacer>
                                    <v-btn
                                        color="primary"
                                        text
                                        @click="dialog2 = false"
                                    >
                                        Cerrar
                                    </v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-dialog>
        <v-flex xs12 md12>
                <v-layout row wrap>
                        <v-flex  class="mx-auto" xs12 md12>
                             
                             <h3>Detalle de Proyecto</h3>
                             <v-card
                        class="mx-auto"
                max-width="100%"
            >
                <v-card-title class="texteando">Titulo: {{proyecto.titulo}}</v-card-title>
                 <v-layout row wrap justify-space-between="">
                      <v-card-subtitle class="pb-0">Comunidad:{{proyecto.comunidad}} </v-card-subtitle>
                <v-card-subtitle class="pb_0">Codigo: {{proyecto.codigo}}</v-card-subtitle>
                 </v-layout>
                
                <v-card-text class="text--primary">
                
                <div class="texteando">Descripción:</div>
                <div>{{proyecto.objGeneral}}</div>
                </v-card-text>
                 <v-card-text>
                     <v-layout row wrap>
                        
                        <v-flex class="text--primary text-right" xs12>
                                <div class="texteando">Estado:</div>
                                <div v-if="proyecto.estado==0">Estado: Pendiente</div>
                                <div v-if="proyecto.estado==1">Estado: Proceso</div>
                                <div v-if="proyecto.estado==2">Estado: Terminado</div>   
                        </v-flex>
                </v-layout>
                </v-card-text>
                 <v-card-text>
                     <v-layout row wrap>
                         <v-flex class="text--primary text-left" xs6>
                                <div class="texteando">Fecha de Inicio:</div>
                                <div>{{proyecto.inicio}}</div> 
                            </v-flex> 
                        <v-flex class="text--primary text-right" xs6>
                                <div class="texteando">Fecha fin:</div>
                                <div>{{proyecto.fin}}</div> 
                        </v-flex>
                </v-layout>
                </v-card-text>
                
            </v-card>

          
        </v-flex>
                        
                     
                </v-layout>
        </v-flex>
        <v-flex xs12 md12> 
            <h3>Estudiantes del Proyecto:</h3>
            <v-card v-if="filteredEstudiantes.length">
                
            <v-simple-table>
                    <template v-slot:default>
                    <thead>
                        <tr>
                            <th class="text-left">Nombre</th>
                            <th class="text-left">Apellido</th>
                            <th class="text-left">Cédula</th>
                            <th class="text-left">Horas Acumuladas</th>
                            <th class="text-left">Editar</th>
                            <th class="text-left">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr v-for="item2 in filteredEstudiantes" :key="item2.cedula">
                            <td>{{ item2.nombre }}</td>
                            <td>{{ item2.apellido }}</td>
                            <td>{{ item2.cedula }}</td>
                            <td v-if="proyecto.tipo=='Proyecto Servicio Comunitario'">{{ item2.horas_acumuladas }}</td>
                                        <td v-else>{{ item2.horas_acumuladas_servicio }}</td>
                            <td>
                                <v-btn type="button" class="btn btn-primary" data-toggle="modal" :data-target="'#modalestudiante-'+item2.cedula" >Editar Estudiante
                                </v-btn>
                            </td>
                             <td>
                                <v-btn @click.prevent="deleteestudiante(item2.cedula)">Elmininar Estudiante
                                </v-btn>
                            </td>
                        </tr>
                    </tbody>
                    </template>
            </v-simple-table>
            </v-card>
            <v-card v-else>
                no se encuentran estudiantes registrados
            </v-card>
        </v-flex>
        <v-flex xs12 md12> 
            <h3>Objetivos Especificos:</h3>
            <v-card v-if="filteredObjetivos.length">
                
            <v-simple-table>
                    <template v-slot:default>
                    <thead>
                        <tr>
                            <th class="text-left">descripción</th>
                            <th class="text-left">Editar</th>
                            <th class="text-left">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr v-for="item in filteredObjetivos" :key="item.codigoobj">
                            <td>{{ item.descripcion }}</td>
                            <td>
                                <v-btn type="button" class="btn btn-primary" data-toggle="modal" :data-target="'#modal-'+item.codigoobj" >Editar Objetivo
                                </v-btn>
                            </td>
                            <td>
                                <v-btn @click.prevent="deleteproyecto(item.codigoobj)">Elmininar Objetivo
                                </v-btn>
                            </td>
                            
                        </tr>
                    </tbody>
                    </template>
            </v-simple-table>
            </v-card>
            <v-card v-else>
                no se encuentran objetivos especificos registrados
            </v-card>
        </v-flex>
        <v-flex xs12 md12> 
            <h3>Actividades del Proyecto:</h3>
            <v-card v-if="filteredActividades.length">
                
            <v-simple-table>
                    <template v-slot:default>
                    <thead>
                        <tr>
                            <th class="text-left">Actividad</th>
                            <th class="text-left">Horas Asignadas</th>
                            
                            <th class="text-left">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr v-for="item in filteredActividades" :key="item.actividad_id">
                            <td>{{ item.descripcion }}</td>
                            <td>{{ item.horas_asignadas }}</td>
                           
                            <td><v-btn type="button" class="btn btn-primary" data-toggle="modal" :data-target="'#modalactividad-'+item.actividad_id" >Editar Actividad
                                </v-btn>
                            </td>
                             <v-simple-table>
                                <template v-slot:default>
                                <thead>
                                    <tr>
                                        <th class="text-left">nombre</th>
                                        <th class="text-left">apellido</th>
                                        <th class="text-left">Horas Acumuladas</th>
                                        
                                        <th class="text-left">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr v-for="alum in filteredEstudiantes" :key="alum.cedula">
                                        <td>{{ alum.nombre }}</td>
                                        <td>{{ alum.apellido }}</td>
                                        <td v-if="proyecto.tipo=='Proyecto Servicio Comunitario'">{{ alum.horas_acumuladas }}</td>
                                        <td v-else>{{ alum.horas_acumuladas_servicio }}</td>
                                        <td v-if="proyecto.tipo=='Proyecto Servicio Comunitario'"><v-btn @click.prevent=" AsignarHoras(alum.cedula,alum.horas_acumuladas,
                                        item.horas_asignadas,proyecto.codigo)">asignar horas Proyecto</v-btn>
                                        </td>
                                        <td v-else>
                                            <v-btn @click.prevent=" AsignarHoras(alum.cedula,alum.horas_acumuladas_servicio,
                                            item.horas_asignadas,proyecto.codigo)">asignar horas Servicio</v-btn>
                                        </td>
                                    </tr>
                                </tbody>
                                </template>
                        </v-simple-table>
                        </tr>
                    </tbody>
                    </template>
            </v-simple-table>
            </v-card>
            <v-card v-else>
                no se encuentran actividades registrados
            </v-card>
        </v-flex>
        <v-card>
                            <v-card-title><h3>Registro Fotográfico</h3></v-card-title>
                           <v-layout row wrap>
                        <v-flex  v-for="img in filteredImagenes"
                            :key="img.id"
                            xs4>
                                <v-card
                                    class="mx-auto"
                                    max-width="400"
                                >
                                        <v-img
                                        class="white--text align-end"
                                        height="500px"
                                        :src="'/images/'+img.img"
                                        >
                                        </v-img>

                                </v-card>   
            
                         </v-flex>
                         </v-layout> 
                         </v-card>
                         <div v-for="item in filteredObjetivos" :key="item.codigoobj" class="modal fade" :id="'modal-'+item.codigoobj" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Objetivo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <v-form @submit.prevent="editarobjetivo(item.codigoobj)">
                                        <v-container fluid grid-list-md text-xs-center>
                                        <v-layout row wrap>
                                            
                                                <v-flex  md12>
                                                 <v-text-field
                                                    label='Objetivo Especifico'
                                                    v-model="objetivo.descripcion"
                                                    type='text'
                                                />
                                                </v-flex>
                        
                             
                              
                            <v-flex xs12 md12>
                                <v-divider></v-divider>
                             <v-btn type="submit">Guardar</v-btn>
                            </v-flex>
                           
                             </v-layout>
                             </v-container> 
                             </v-form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                
                                </div>
                                </div>
                            </div>
                            </div>
                            <div v-for="item in filteredActividades" :key="item.actividad_id" class="modal fade" :id="'modalactividad-'+item.actividad_id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Actividad</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <v-form @submit.prevent="editaractividad(item.actividad_id)">
                                        <v-container fluid grid-list-md text-xs-center>
                                        <v-layout row wrap>
                                            
                                                <v-flex  md12>
                                                 <v-text-field
                                                    label='Descripcion de Actividad'
                                                    v-model="actividad.descripcion"
                                                    type='text'
                                                />
                                                </v-flex>
                        
                             
                              
                            <v-flex xs12 md12>
                                <v-divider></v-divider>
                             <v-btn type="submit">Guardar</v-btn>
                            </v-flex>
                           
                             </v-layout>
                             </v-container> 
                             </v-form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                
                                </div>
                                </div>
                            </div>
                            </div>
                             <div v-for="item2 in filteredEstudiantes" :key="item2.cedula" class="modal fade" :id="'modalestudiante-'+item2.cedula" tabindex="-1" role="dialog" aria-labelledby="exampleMdddodafflLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Estudiante</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <v-form @submit.prevent="editarestudiante(item2.cedula)">
                                        <v-container fluid grid-list-md text-xs-center>
                                        <v-layout row wrap>
                                            
                                               <v-flex  md12>

                                     <v-text-field
                                label='Nombre'
                               
                                 v-model="estudiante.nombre"
                                type='text'
                             />
                                </v-flex>
                                 <v-flex  md12>

                                     <v-text-field
                                   
                                label='Apellido'
                                 v-model="estudiante.apellido"
                                type='text'
                             />
                                </v-flex>
                        
                             
                              
                            <v-flex xs12 md12>
                                <v-divider></v-divider>
                             <v-btn type="submit">Guardar</v-btn>
                            </v-flex>
                           
                             </v-layout>
                             </v-container> 
                             </v-form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                
                                </div>
                                </div>
                            </div>
                            </div>
    </div>
</template>

<script>
import {mapGetters} from 'vuex';
import swal from 'bootstrap-sweetalert';
import 'bootstrap-sweetalert/dist/sweetalert.css';
import 'bootstrap-sweetalert/dist/sweetalert.js';
  export default {
    data () {
      return {
          proyecto:[],  
          objetivo:[
              {
                  descripcion:'',
              }],
          estudiante:[
              {
                  nombre:'',
                  apellido:'',
                  cedula:null,
              }], 
         actividad:[
              {
                  descripcion:'',
                  horas_asignadas:null,
              }],
          dialog: false,
          dialog1: false,
          dialog2: false,
          dialog3: false,
          ruta:String(this.$route.params.codigo),
          ima1:'',
                    imageni:{
                        semana:0,
                        image:[],
                
                    },
      }
    },
    mounted () {
            var urlKeeps = '/proyectos/'+this.ruta;
                axios.get(urlKeeps).then(response => {
                this.proyecto = response.data;        
            });
           var objetivosurl = '/get-objetivos/'+this.ruta;
                axios.get(objetivosurl).then(response => {
               this.$store.commit('setObjetivos',response.data);        
            });
            var estudiantessurl = '/get-estudiantes/'+this.ruta;
                axios.get(estudiantessurl).then(response => {
               this.$store.commit('setEstudiantes',response.data);        
            });
            var actividadessurl = '/get-actividades/'+this.ruta;
                axios.get(actividadessurl).then(response => {
               this.$store.commit('setActividades',response.data);  
             });
             var actividadesimagesurl = '/get-imagenes/'+this.ruta;
                axios.get(actividadesimagesurl).then(response => {
               this.$store.commit('setImagenes',response.data);  
                     
            });
            
        },
        
     computed: {

        ...mapGetters(['filteredObjetivos','filteredEstudiantes','filteredActividades','filteredImagenes']),
        imagen(){
              return this.ima1;
          },
    },
    methods:{
        editaractividad(id) {
            var urldac = '/actividades/'+id;
            axios.put(urldac,{
                descripcion:this.actividad.descripcion,
            }).then(response => {
                            this.actividad.descripcion='';
                            var actividadessurl = '/get-actividades/'+this.ruta;
                            axios.get(actividadessurl).then(response => {
                            this.$store.commit('setActividades',response.data);  
                            });             
    		})
            },
        editarestudiante(cedula) {
            var urld = '/estudiantes/'+cedula;
            axios.put(urld,{
                nombre:this.estudiante.nombre,
                apellido:this.estudiante.apellido,
            }).then(response => {
                            this.estudiante.nombre='';
                            this.estudiante.apellido='';
                            var estudiantessurl = '/get-estudiantes/'+this.ruta;
                            axios.get(estudiantessurl).then(response => {
                            this.$store.commit('setEstudiantes',response.data);   
                    });        
                             
    		})
            },
            deleteestudiante(id) {
                var urlKeeps = '/estudiantes/'+id;
                    axios.delete(urlKeeps).then(response => {
                        var estudiantessurl = '/get-estudiantes/'+this.ruta;
                             axios.get(estudiantessurl).then(response => {
                            this.$store.commit('setEstudiantes',response.data);   
                    });       
          })
        },
        editarobjetivo(id) {
            var urld = '/objetivos/'+id;
            axios.put(urld,{
                descripcion:this.objetivo.descripcion,
            }).then(response => {
                            this.objetivo.descripcion='';
                            var objetivosurl = '/get-objetivos/'+this.ruta;
                                axios.get(objetivosurl).then(response => {
                            this.$store.commit('setObjetivos',response.data);        
                            });           
    		})
            },
             deleteproyecto(id) {
                var urlKeeps = '/objetivos/'+id;
                    axios.delete(urlKeeps).then(response => {
                        var objetivosurl = '/get-objetivos/'+this.ruta;
                            axios.get(objetivosurl).then(response => {
                            this.$store.commit('setObjetivos',response.data);        
                    });
          })
        },
            CrearObjetivo(pro) {
                      var url = '/objetivos';
                        axios.post(url,{
                                proyecto_codigo:pro,
                                descripcion: this.objetivo.descripcion,
                        }).then(response => {
                            this.objetivo.descripcion='';
                            var objetivosurl = '/get-objetivos/'+this.ruta;
                            axios.get(objetivosurl).then(response => {
                            this.$store.commit('setObjetivos',response.data);        
                            });
                        })
            },
            IntegrarAlumno(idpro) {
                      var url = '/estudiantes';
                        axios.post(url,{
                                nombre:this.estudiante.nombre,
                                apellido:this.estudiante.apellido,
                                cedula:this.estudiante.cedula,
                                proyecto_id:idpro,      
                        }).then(response => {
                                this.estudiante.nombre='';
                                this.estudiante.apellido='';
                                this.estudiante.cedula='';
                             var estudiantessurl = '/get-estudiantes/'+this.ruta;
                                    axios.get(estudiantessurl).then(response => {
                                this.$store.commit('setEstudiantes',response.data);        
                                });
                        })
            },
            AgregarActividad(idapro) {
                    let total=0;
                    for(var i=0; i<this.filteredActividades.length; i++){
                        total=total + this.filteredActividades[i].horas_asignadas;
                    }
                    if(total + Number(this.actividad.horas_asignadas)>60){
                        swal("error","¡No es posible agregar más actividades sus horas asignadas más las que desea asignas son mayores a 60 horas!","error");
                    }else{
                        var url = '/actividades';
                        axios.post(url,{
                                descripcion:this.actividad.descripcion,
                                horas_asignadas:this.actividad.horas_asignadas,
                                proyecto_id:idapro,      
                        }).then(response => {
                            this.actividad.descripcion='';
                            this.actividad.horas_asignadas='';
                             var actividadessurl = '/get-actividades/'+this.ruta;
                                axios.get(actividadessurl).then(response => {
                            this.$store.commit('setActividades',response.data);        
                            });
                        })
                    }
                      
            },
             AgregarImagen: function(code) {
            let formData = new FormData();
            
            formData.append("actividad_id_r",  this.imageni.semana);
            formData.append("proyecto_id",  code);
            formData.append("img", this.imageni.image);
            var url = '/image';
            axios.post(url,formData,  {
            headers: { "Content-Type": "multipart/form-data" }
        }).then(response => {
                this.imageni.semana='';
                this.imageni.image='';
                var actividadesimagesurl = '/get-imagenes/'+this.ruta;
                axios.get(actividadesimagesurl).then(response => {
               this.$store.commit('setImagenes',response.data);  
                     
            });
                this.ima1='',
                this.imageni={
                        semana:0,
                        image:[],
                
                    }

    		})
            },
          obtenerimagen(e){
                let file = e.target.files[0];
          
                this.imageni.image= file;
                this.cargarimage(file);
            },
        cargarimage(file){
                let reader = new FileReader();
                reader.onload = (e) => {
                    this.ima1=e.target.result;
                }
                reader.readAsDataURL(file);
            },
        ImagendeActividad(codi , j){
                var imaactividad = '/get-imagenes/'+codi;
                axios.get(imaactividad).then(response => {
               this.$store.commit('setImagenActividad'+j,response.data);        
            });
        
        },
        AsignarHoras(id,horas_acu,horas_asig,codigo){
            
            var url = '/asignar-horas/'+id;
            horas_acu=horas_acu + horas_asig;
            axios.put(url,{
                horas_acumuladas:horas_acu,
                codigo:codigo,

            }).then(response => { 
                var estudiantessurl = '/get-estudiantes/'+this.ruta;
                axios.get(estudiantessurl).then(response => {
                this.$store.commit('setEstudiantes',response.data);        
            });       
    		})
        } 
      },
        
      
  }
</script>

<style lang="scss" scoped>
    .texteando{
  
        font-weight: bold;
        color:#288C93;
    }
    h3{
        font-weight: bold;
        color:#288C93;
        margin-bottom: 30px;
    }
    h3::after{
        content: '';
        display: block;
        height: 5px;
        width: 120px;
        background-color: #E1BE54;
       
    }
    h4{
        font-weight: bold;
        color:#288C93;
        margin-bottom: 20px;
        padding-top: 20px;
        text-align: center;
    }
    .full{
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      width: 100%;
      
    }
</style>