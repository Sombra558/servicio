<template>
  <v-simple-table>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-left">Nombre</th>
          <th class="text-left">Correo</th>
          <th class="text-left">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in personas" :key="item.id">
          <td>{{item.name}}</td>
          <td>{{item.email}}</td>
          <td>
            <router-link :to="'/Empleado/'+item.id">Emplear Usuario</router-link>
          </td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>

<script>

  export default {
      name:'usuarios-por-emplear',
    data () {
      return {
        personas: [],
      }
    },
     mounted () {
            var urlKeeps = '/user/porempleados';
            axios.get(urlKeeps).then(response => {
            this.personas = response.data
            });
      }
  }
</script>

<style lang="scss" scoped>

</style>