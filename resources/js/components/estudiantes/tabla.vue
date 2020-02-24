<template>
<div>
  <h2 class="title">Lista de <strong v-if="accion=='proyectos'">Proyectos</strong> <strong v-else-if="accion=='servicios'">Servicios de</strong> <strong v-else>Estudiantes Actualmente Cursando</strong>   Servicio Comunitario</h2>
  <v-simple-table>
    <template v-slot:default v-if="accion=='proyectos'">
      <thead>
        <tr>
          <th class="text-left">Codigo</th>
          <th class="text-left">Titulo</th>
          
          <th class="text-left">Estado</th>
          
        </tr>
      </thead>
      <tbody>
        <tr v-for="proyecto in filteredProyectosPublicos" :key="proyecto.codigo">
                <td>{{proyecto.codigo}}</td>
                <td>{{proyecto.titulo}}</td>
                <td v-if="proyecto.estado==0">pendiente</td>
                <td v-if="proyecto.estado==1">En Proceso</td>
                <td v-if="proyecto.estado==2">Terminado</td>
                <td ><a :href="'/proyecto-get-publico/'+proyecto.codigo">Detalles</a></td>
          
        </tr>
      </tbody>
    </template>
    <template v-slot:default v-else-if="accion=='servicios'">
      <thead>
        <tr>
          <th class="text-left">Codigo</th>
          <th class="text-left">Titulo</th>
          
          <th class="text-left">Estado</th>
          
        </tr>
      </thead>
      <tbody>
        <tr v-for="proyecto in filteredServicio" :key="proyecto.codigo">
                <td>{{proyecto.codigo}}</td>
                <td>{{proyecto.titulo}}</td>
                <td v-if="proyecto.estado==0">pendiente</td>
                <td v-if="proyecto.estado==1">En Proceso</td>
                <td v-if="proyecto.estado==2">Terminado</td>
                <td ><a :href="'/proyecto-get-publico/'+proyecto.codigo">Detalles</a></td>
          
        </tr>
      </tbody>
    </template>
    <template v-slot:default v-else>
      <thead>
        <tr>
          <th class="text-left">Cédula</th>
          <th class="text-left">Nombre</th>
          <th class="text-left">Apellido</th>
          
          
        </tr>
      </thead>
      <tbody>
        <tr v-for="alumno in filteredEstudiantes" :key="alumno.cedula">
                <td>{{alumno.cedula}}</td>
                <td>{{alumno.nombre}}</td>
                <td>{{alumno.apellido}}</td>
                <td ><a :href="'/estudiante-get-publico/'+alumno.cedula">Detalles</a></td>
          
        </tr>
      </tbody>
    </template>
    
  </v-simple-table>
  </div>
  
</template>

<script>
import {mapGetters} from 'vuex';
    export default {
        name:'lista-de-proyectos',
        props: ['accion'],
        data: () => ({
            alumnos:[]
        }),
        computed: {
        ...mapGetters(['filteredProyectosPublicos','filteredEstudiantes','filteredServicio']),
      
        },
        mounted () {
          
         var urlalumnos = '/alumnoscursando';
        axios.get(urlalumnos).then(response => {
        this.$store.commit('setEstudiantes',response.data)
        });
        var urlProyectos = '/proyectosdeservicio';
        axios.get(urlProyectos).then(response => {
        this.$store.commit('setProyectosPublicos',response.data)
        });
        },
        
    }
</script>

<style lang="scss" scoped>

</style>
