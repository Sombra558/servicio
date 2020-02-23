<template>
    <div>
   
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
                        <v-flex class="text--primary text-left" xs6>
                                <div class="texteando">Carrera:</div>
                                <div>{{proyecto.carrera}}</div>
                        </v-flex>
                        <v-flex class="text--primary text-right" xs6>
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

            <v-card v-if="this.proyecto.tutor_id==null">
                <v-card-title>Asignar Un Tutor Academico</v-card-title>
                <v-card-actions>
                     <v-form @submit.prevent="Asignartutor" max-width="100%">
                    <v-select
                        v-model="tutor"
                        :items="filteredDocentes"
                        item-text="name"
                        item-value='id'
                        label="tutores"
                    ></v-select>
                      <v-btn type="submit">Asignar</v-btn>
                    </v-form>
                </v-card-actions>
            </v-card>
          
        </v-flex>
                        
                     
                </v-layout>
        </v-flex>
    
    <v-flex xs12 md12 v-if="proyecto.estado !=0"> 
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
                          
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr v-for="item2 in filteredEstudiantes" :key="item2.cedula">
                            <td>{{ item2.nombre }}</td>
                            <td>{{ item2.apellido }}</td>
                            <td>{{ item2.cedula }}</td>
                            <td>{{ item2.horas_acumuladas }}</td>
                   
                            
                        </tr>
                    </tbody>
                    </template>
            </v-simple-table>
            </v-card>
            <v-card v-else>
                no se encuentran estudiantes registrados
            </v-card>
        </v-flex>
        <v-flex xs12 md12 v-if="proyecto.estado !=0"> 
            <h3>Objetivos Especificos:</h3>
            <v-card v-if="filteredObjetivos.length">
                
            <v-simple-table>
                    <template v-slot:default>
                    <thead>
                        <tr>
                            <th class="text-left">descripción</th>
                         
                            
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr v-for="item in filteredObjetivos" :key="item.codigoobj">
                            <td>{{ item.descripcion }}</td>
                          
                            
                        </tr>
                    </tbody>
                    </template>
            </v-simple-table>
            </v-card>
            <v-card v-else>
                no se encuentran objetivos especificos registrados
            </v-card>
        </v-flex>
        <v-flex xs12 md12 v-if="proyecto.estado !=0"> 
            <h3>Actividades del Proyecto:</h3>
            <v-card v-if="filteredActividades.length">
                
            <v-simple-table>
                    <template v-slot:default>
                    <thead>
                        <tr>
                            <th class="text-left">Actividad</th>
                            <th class="text-left">Horas Asignadas</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr v-for="item in filteredActividades" :key="item.actividad_id">
                            <td>{{ item.descripcion }}</td>
                            <td>{{ item.horas_asignadas }}</td>
                           
                            
                            
                        </tr>
                    </tbody>
                    </template>
            </v-simple-table>
            </v-card>
            <v-card v-else>
                no se encuentran actividades registrados
            </v-card>
        </v-flex>
        <v-card v-if="proyecto.estado !=0">
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
import {mapGetters} from 'vuex'
  export default {
    data () {
      return {
          proyecto:[],
          tutores:[],
          tutor:0,
          ruta:String(this.$route.params.codigo), 
      }
    },
    mounted () {
            var urlKeeps = '/captura/'+this.ruta;
                axios.get(urlKeeps).then(response => {
                this.proyecto = response.data;        
            });
             var objetivosurl = '/get-objetivos-admin/'+this.ruta;
                axios.get(objetivosurl).then(response => {
               this.$store.commit('setObjetivos',response.data);        
            });
            var estudiantessurl = '/get-estudiantes-admin/'+this.ruta;
                axios.get(estudiantessurl).then(response => {
               this.$store.commit('setEstudiantes',response.data);        
            });
            var actividadessurl = '/get-actividades-admin/'+this.ruta;
                axios.get(actividadessurl).then(response => {
               this.$store.commit('setActividades',response.data);  
             });
             var actividadesimagesurl = '/get-imagenes-admin/'+this.ruta;
                axios.get(actividadesimagesurl).then(response => {
               this.$store.commit('setImagenes',response.data);  
                     
            });
        },
     computed: {
        ...mapGetters(['filteredDocentes','filteredObjetivos','filteredEstudiantes','filteredActividades','filteredImagenes']),
    },
    methods:{
            Asignartutor: function() {
            var url = '/asignar/'+this.ruta;
            axios.put(url,{
                tutor_id:this.tutor,
            }).then(response => {
                     var urlKeeps = '/proyectos';
                        axios.get(urlKeeps).then(response => {
                        this.$store.commit('setProyectos',response.data)
                        });
                        var urlKeeps1 = '/get-pendientes';
                        axios.get(urlKeeps1).then(response => {
                        this.$store.commit('setPendientes',response.data)
                        });
                        var urlKeeps2 = '/get-procesos';
                        axios.get(urlKeeps2).then(response => {
                        this.$store.commit('setProcesos',response.data)
                        });
                  this.$router.push('/ControlAdmin');
    		})
            },
           
      }
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