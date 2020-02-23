<template>
    <div>
        <v-flex xs12 md10 offset-md-1> 
            <h3>Proyectos en Proceso</h3>
            <v-card v-if="filteredProcesos.length">
                
            <v-simple-table>
                    <template v-slot:default>
                    <thead>
                        <tr>
                            <th class="text-left">Codigo</th>
                            <th class="text-left">Titulo</th>
                            <th class="text-left">Objetivo General</th>
                            <th class="text-left">Comunidad</th>
                            <th class="text-left">Inicio</th>
                            <th class="text-left">Fin</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr v-for="item in filteredProcesos" :key="item.codigo">
                            <td>{{ item.codigo }}</td>
                            <td>{{ item.titulo }}</td>
                            <td>{{ item.objGeneral }}</td>
                            <td>${{ item.comunidad}}</td>
                            <td>
                                    {{item.inicio}}
                            </td>
                            <td>
                                    {{item.fin}}
                            </td>
                            <td><router-link class="texteando" :to="'/ControlAdmin/Proyecto-Pendientes-Detalles/'+item.codigo">Detalles</router-link></td>
                        </tr>
                    </tbody>
                    </template>
            </v-simple-table>
            </v-card>
            <v-card v-else>
                no se encuentran proyectos en proceso
            </v-card>
        </v-flex>
    </div>
</template>

<script>
import {mapGetters} from 'vuex'
import BuscadorComponent from '../../SubComponentes/SearchComponent';
  export default {
    data () {
      return {
      }
    },
     components: {
            BuscadorComponent,
    },
     computed: {
        ...mapGetters(['filteredProcesos']),
    },
  }
</script>

<style scoped>
.texteando{
    text-decoration: none;
    font-weight: bold;
    color:#288C93;
}
.texteando:hover{
   
    color:#E1BE54;
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
</style>