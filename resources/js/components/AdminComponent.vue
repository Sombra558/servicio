<template>
    <v-app >
            <div class="tamanin">
            <router-view class="py-4"></router-view>
          
        
                </div>
    </v-app>

</template>

<script>
  export default {
    mounted () {
   //  var urlKeeps = '/ControlAdmin/getpropuestas';
    //        axios.get(urlKeeps).then(response => {
    //        this.$store.commit('setPropuestas',response.data)
    //  });
    //  var urlproyectosAprobados = '/ControlAdmin/getproyectospendiente';
    //        axios.get(urlproyectosAprobados).then(response => {
    //        this.$store.commit('setProyectosAprobados',response.data)
    //  });
    //  var urlproyectosPendientes = '/ControlAdmin/getproyectosaprobados';
    //        axios.get(urlproyectosPendientes).then(response => {
    //        this.$store.commit('setProyectosPendientes',response.data)
    //  });
    },
  }
</script>

<style scoped>
    .footersuperior{
        background: #0E6876;
    }
    .footerinferior{
        background: #192B42;
    }
    .tamanin{
      height: 100%;
      min-height: 100vh;
    }
</style>