<template>
    <div>
        <v-flex xs12 md10 offset-md-1> 
            <h3>Total Proyectos</h3>
            <v-card v-if="filteredProyectos.length">
                
            <v-simple-table>
                    <template v-slot:default>
                    <thead>
                        <tr>
                            <th class="text-left">Codigo</th>
                            <th class="text-left">Titulo</th>
                            <th class="text-left">Objetivo General</th>
                            <th class="text-left">Comunidad</th>
                            <th class="text-left">Carrera</th>
                            <th class="text-left">Tipo</th>
                            <th class="text-left">Inicio</th>
                            <th class="text-left">Fin</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr v-for="item in filteredProyectos" :key="item.codigo">
                            <td>{{ item.codigo }}</td>
                            <td>{{ item.titulo }}</td>
                            <td>{{ item.objGeneral }}</td>
                            <td>{{ item.comunidad}}</td>
                            <td>{{ item.carrera}}</td>
                            <td>{{ item.tipo}}</td>
                            <td>
                                    {{item.inicio}}
                            </td>
                            <td>
                                    {{item.fin}}
                            </td>
                        </tr>
                    </tbody>
                    </template>
            </v-simple-table>
            </v-card>
            <v-card v-else>
                No se encuentran proyectos registrados
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
        ...mapGetters(['filteredProyectos']),
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