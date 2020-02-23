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
        var urlKeeps2 = '/get-procesos-docente';
        axios.get(urlKeeps2).then(response => {
        this.$store.commit('setProcesosDocentes',response.data)
        });
        var urlKeeps3 = '/get-terminados-docente';
        axios.get(urlKeeps3).then(response => {
        this.$store.commit('setTerminadosDocentes',response.data)
        });
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