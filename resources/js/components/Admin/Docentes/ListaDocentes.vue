<template>
    <div>
        <v-flex xs12 md10 offset-md-1> 
            <h3>Docentes</h3>
            <v-card v-if="filteredDocentes.length">
                
            <v-simple-table>
                    <template v-slot:default>
                    <thead>
                        <tr>
                            <th class="text-left">Nombre</th>
                            <th class="text-left">Correo</th>
                        
                            
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr v-for="item in filteredDocentes" :key="item.id">
                            <td>{{ item.name }}</td>
                            <td>{{ item.email }}</td>
                            
                        </tr>
                    </tbody>
                    </template>
            </v-simple-table>
            </v-card>
            <v-card v-else>
                no se encuentran docentes registrados
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
        ...mapGetters(['filteredDocentes']),
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