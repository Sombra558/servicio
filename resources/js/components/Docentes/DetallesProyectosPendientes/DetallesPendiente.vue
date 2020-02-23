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
                            <th class="text-left">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr v-for="item2 in filteredEstudiantes" :key="item2.cedula">
                            <td>{{ item2.nombre }}</td>
                            <td>{{ item2.apellido }}</td>
                            <td>{{ item2.cedula }}</td>
                            <td>{{ item2.horas_acumuladas }}</td>
                            <td>editar-eliminar</td>
                            
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
                            <th class="text-left">acción</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr v-for="item in filteredObjetivos" :key="item.codigoobj">
                            <td>{{ item.descripcion }}</td>
                            <td>editar</td>
                            
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
                           
                            <td>editar-eliminar</td>
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
                                        <td>{{ alum.horas_acumuladas }}</td>
                                        <td><v-btn @click.prevent=" AsignarHoras(alum.cedula,alum.horas_acumuladas,
                                        item.horas_asignadas)">asignar horas</v-btn></td>
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
            CrearObjetivo(pro) {
                      var url = '/objetivos';
                        axios.post(url,{
                                proyecto_codigo:pro,
                                descripcion: this.objetivo.descripcion,
                        }).then(response => {
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
        AsignarHoras(id,horas_acu,horas_asig){
            
            var url = '/asignar-horas/'+id;
            horas_acu=horas_acu + horas_asig;
            axios.put(url,{
                horas_acumuladas:horas_acu,
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