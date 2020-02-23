<template>
    <div>
         <v-card
                            color="#ffffff"
                            light
                        >
            <v-flex  xs10  offset-xs1>
                    <h1>Bienvenido Profesor</h1>
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
                                <v-btn @click="$router.push('/Docente/Proyectos-Todos')" text>Ver Detalles</v-btn>
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
                                <v-btn @click="$router.push('/Docente/Proyetos-Procesos')" text>Ver Detalles</v-btn>
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
                                <v-btn @click="$router.push('/Docente/Proyetos-Terminados')" text>Ver Detalles</v-btn>
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
          
                procesos:0,
                terminadas:0,
             
               
            }
        },
        mounted () {
            var proyectos = '/contadorproyectosdocentes';
            axios.get(proyectos).then(response => {
                this.total = response.data;
            });
          var procesosurl = '/contadorprocesosdocente';
            axios.get(procesosurl).then(response => {
                this.procesos = response.data;
            });
            var terminadosurl = '/contadorterminadosdocente';
            axios.get(terminadosurl).then(response => {
                this.terminadas = response.data;
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