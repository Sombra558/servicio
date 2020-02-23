<template>
    <v-card-title class="texteando">
      Componente Buscador
      <v-spacer></v-spacer>
      <v-text-field
        v-model="query"
        label="Search"
        single-line
        hide-details
      ></v-text-field>
    </v-card-title>
</template>

<script>
    export default {
        name: 'ComponenteBuscador',
        computed: {
            query: {
                get () {
                return this.$store.state.filterPropuesta.query
                },
                set (value) {
                this.$store.commit('setFilterPropuesta', {
                    filterPropuesta: 'query',
                    value
                })
                }
        }
        },
    }
</script>

<style  scoped>
.texteando{
    font-weight: bold;
    color:#288C93;
}
</style>