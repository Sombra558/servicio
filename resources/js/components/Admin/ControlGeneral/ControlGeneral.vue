<template>
    <div>
         <v-card
                            color="#ffffff"
                            light
                        >
            <v-flex  xs10  offset-xs1>
                    <h1>Bienvenido al Control Administrativo de Servicio Comunitario</h1>
                    <br>
                    <h4>Propuestas</h4>
                   
                     <v-layout row wrap >
                         
                    
                       
                          <v-flex  xs12 sm6>
                        <v-card
                            color="#8CC9BE"
                            dark
                        >
                        <v-card-text class="white--text">
                        <div class="headline mb-2">Total Proyectos</div>
                            
                        </v-card-text>
                        <v-card-text class="white--text">
                        <div class="headline mb-2">{{this.total}}</div>
                            
                        </v-card-text>
                            <v-card-actions>
                                <v-btn @click="$router.push('/ControlAdmin/Proyectos-Todos')" text>Ver Detalles</v-btn>
                            </v-card-actions>
                        </v-card>
                        </v-flex>
                        <v-flex  xs12 sm6>
                        <v-card
                            color="#8CC9BE"
                            dark
                        >
                        <v-card-text class="white--text">
                        <div class="headline mb-2">Proyectos Pendientes</div>
                            
                        </v-card-text>
                        <v-card-text class="white--text">
                        <div class="headline mb-2">{{this.pendientes}}</div>
                            
                        </v-card-text>
                            <v-card-actions>
                                <v-btn @click="$router.push('/ControlAdmin/Proyetos-Pendiente')" text>Ver Detalles</v-btn>
                            </v-card-actions>
                        </v-card>
                        </v-flex>
                        <v-flex  xs12 sm6>
                        <v-card
                            color="#8CC9BE"
                            dark
                        >
                        <v-card-text class="white--text">
                        <div class="headline mb-2">Proyectos en Proceso</div>
                             
                        </v-card-text>
                             <v-card-text class="white--text">
                        <div class="headline mb-2">{{this.procesos}}</div>
                            
                        </v-card-text>
                            <v-card-actions>
                                <v-btn @click="$router.push('/ControlAdmin/Proyetos-Procesos')" text>Ver Detalles</v-btn>
                            </v-card-actions>
                        </v-card>
                        </v-flex>
                        <v-flex  xs12 sm6>
                        <v-card
                            color="#8CC9BE"
                            dark
                        >
                        <v-card-text class="white--text">
                        <div class="headline mb-2">Proyectos Terminados</div>
                             
                        </v-card-text>
                                 <v-card-text class="white--text">
                        <div class="headline mb-2">{{this.terminadas}}</div>
                            
                        </v-card-text>
                            <v-card-actions>
                                <v-btn @click="$router.push('/ControlAdmin/Proyetos-Terminados')" text>Ver Detalles</v-btn>
                            </v-card-actions>
                          

                        </v-card>

                        </v-flex>
                        <v-flex  xs12 sm6>
                        <v-card
                            color="#8CC9BE"
                            dark
                        >
                        <v-card-text class="white--text">
                        <div class="headline mb-2">Total Docentes</div>
                            
                        </v-card-text>
                        <v-card-text class="white--text">
                        <div class="headline mb-2">{{this.usuarios}}</div>
                            
                        </v-card-text>
                            <v-card-actions>
                                <v-btn @click="$router.push('/ControlAdmin/Lista-Docente')" text>Ver Detalles</v-btn>
                            </v-card-actions>
                        </v-card>
                        </v-flex>
                        </v-layout>
                        
            </v-flex>
           
              <br>
        
            </v-card>
          
    </div>
</template>

<script>
    export default {
        data(){
            return{
                total:0,
                pendientes:0,
                procesos:0,
                terminadas:0,
                usuarios:0,
               
            }
        },
        mounted () {
            var proyectos = '/contadorproyectos';
            axios.get(proyectos).then(response => {
                this.total = response.data;
            });
            var pendientesurl = '/contadorpendientes';
            axios.get(pendientesurl).then(response => {
                this.pendientes = response.data;
            });
            var procesosurl = '/contadorprocesos';
            axios.get(procesosurl).then(response => {
                this.procesos = response.data;
            });
            var terminadosurl = '/contadorterminados';
            axios.get(terminadosurl).then(response => {
                this.terminadas = response.data;
            });
            var docentesurl = '/contadordocentes';
            axios.get(docentesurl).then(response => {
                this.usuarios = response.data;
            });
          
        }
    }
       
</script>

<style scoped>
h1::after{
        content: '';
        display: block;
        height: 5px;
        width: 220px;
        background-color: #E1BE54;
       
    }
</style>