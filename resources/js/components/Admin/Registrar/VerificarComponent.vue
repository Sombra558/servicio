<template>
    <div>
            <v-container fluid grid-list-md text-xs-center>
                <v-layout row wrap >     
                <v-flex  xs10  offset-xs1>
                    <v-card  >  
                        <v-card-title>Datos del Proyecto</v-card-title>
                       
                    </v-card>
                    <br>
                    <v-card>
                     <v-form @submit.prevent="CrearProyecto" max-width='80%' >
                            <v-flex  xs10  offset-xs1>
                            <v-text-field
                        
                             v-model="proyecto.titulo"
                             label="Titulo"
                             required
                            ></v-text-field>
                            </v-flex>
                            <v-flex  xs10  offset-xs1>
                            <v-text-field
                            
                             v-model="proyecto.objGeneral"
                             label="Objetivo General"
                             required
                            ></v-text-field>
                            </v-flex>
                            <v-flex  xs10  offset-xs1>
                           <v-text-field
                         
                             v-model="proyecto.comunidad"
                             label="Comunidad"
                             required
                            ></v-text-field>
                            </v-flex>
                            <v-flex  xs10  offset-xs1>
                                        <v-select
                                            label="Carreras"
                                            :items="carreras"
                                            v-model="proyecto.carrera"
                                            item-text="carrera"
                                            item-value='carrera'
                                        ></v-select>
                            </v-flex>
                            <v-flex  xs10  offset-xs1>
                                        <v-select
                                            label="Tipo"
                                            :items="tipos"
                                            v-model="proyecto.tipo"
                                            item-text="tipo"
                                            item-value='tipo'
                                        ></v-select>
                            </v-flex>
                            <div class="flexi">
                                <div>
                                <p>Fecha de Inicio</p>
                                <v-date-picker
                                v-model="proyecto.inicio"
                                
                                ></v-date-picker>
                                </div>
                                <div>
                                    <p>Fecha de Culminación</p>
                                <v-date-picker
                                v-model="proyecto.fin"
                                label='Fecha Fin'
                                ></v-date-picker>
                                </div>
                           </div>
                         
                    
                           <v-divider></v-divider>
                             <v-btn type="submit">Crear Proyecto</v-btn>
                             </v-form>   
                             </v-card> 
                </v-flex>
                </v-layout>
            </v-container>
    </div>
</template>

<script>
import  toastr from'toastr';
import 'toastr/build/toastr.css';
    export default {
        name:'registro-proyectos',
        data() {
            return {
                proyecto:{
                        titulo: '',
                        objGeneral: '',
                        comunidad:'',
                        carrera:'',
                        tipo:'',
                        inicio: '',
                        fin: '',
                    },
                carreras:[
                    {
                    id:1,
                    carrera:'Ingenieria en Sistemas'
                    },
                    {
                    id:2,
                    carrera:'Ingenieria Electronica'
                    },
                    {
                    id:3,
                    carrera:'Ingenieria Electrica'
                    },
                    {
                    id:4,
                    carrera:'Ingenieria Civil'
                    },
                    {
                    id:5,
                    carrera:'Ingenieria en Mantenimiento mecanico'
                    },
                    {
                    id:6,
                    carrera:'Ingenieria Industrial'
                    },
                    {
                    id:7,
                    carrera:'Arquitectura'
                    }
                ],
                tipos:[
                    {
                    id:1,
                    tipo:'Servicio Comunitario'
                    },
                    {
                    id:2,
                    tipo:'Proyecto Servicio Comunitario'
                    }
                ]
              
            }
        },
       methods: {
            CrearProyecto: function() {
                        var url = '/proyectos';
                        
                        axios.post(url,{
                            titulo: this.proyecto.titulo,
                            objGeneral: this.proyecto.objGeneral,
                            comunidad: this.proyecto.comunidad,
                            carrera: this.proyecto.carrera,
                            tipo: this.proyecto.tipo,
                            inicio: this.proyecto.inicio,
                            fin: this.proyecto.fin,
                        }).then(response => {
                             var urlKeeps = '/proyectos';
                            axios.get(urlKeeps).then(response => {
                            this.$store.commit('setProyectos',response.data)
                            });
                            var urlKeeps1 = '/get-pendientes';
                            axios.get(urlKeeps1).then(response => {
                            this.$store.commit('setPendientes',response.data)
                            });
                        this.$router.push('/ControlAdmin');
                       })
        }
       },
    }
</script>

<style  scoped>
    .flexi{
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }
    @media only screen and (max-width: 600px) {
        .flexi{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    }
</style>