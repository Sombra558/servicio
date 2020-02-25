<template>
    <div >
            <v-form v-if="accion=='proyectos'">
                    <v-container>
                            <v-row>
                                    <v-col
                                    cols="12"
                                    md="6"
                                    >
                                        <v-text-field
                                            v-model="codigo"
                                            :counter="20"
                                            label="codigo"
                                            required
                                        ></v-text-field>
                                    </v-col>
                                    <v-col
                                    cols="12"
                                    md="6"
                                    >
                                        <v-text-field
                                            v-model="titulo"
                                            :counter="20"
                                            label="titulo"
                                            required
                                        ></v-text-field>
                                    </v-col>

                                    <v-col
                                    cols="12"
                                    md="6"
                                    >
                                        <v-text-field
                                            
                                           v-model="objGeneral"
                                            :counter="40"
                                            label="Objetivo General"
                                            required
                                        ></v-text-field>
                                    </v-col>
                            </v-row>
            </v-container>
        </v-form>
        <v-form v-else-if="accion=='servicios'">
                    <v-container>
                            <v-row>
                                    <v-col
                                    cols="12"
                                    md="6"
                                    >
                                        <v-text-field
                                            v-model="codigo2"
                                            :counter="20"
                                            label="codigo"
                                            required
                                        ></v-text-field>
                                    </v-col>
                                    <v-col
                                    cols="12"
                                    md="6"
                                    >
                                        <v-text-field
                                            v-model="titulo2"
                                            :counter="20"
                                            label="titulo"
                                            required
                                        ></v-text-field>
                                    </v-col>

                                    <v-col
                                    cols="12"
                                    md="6"
                                    >
                                        <v-text-field
                                            
                                           v-model="objGeneral2"
                                            :counter="40"
                                            label="Objetivo General"
                                            required
                                        ></v-text-field>
                                    </v-col>
                            </v-row>
            </v-container>
        </v-form>
        <v-form v-else>
                    <v-container>
                            <v-row>
                                    <v-col
                                    cols="12"
                                    md="6"
                                    >
                                        <v-text-field
                                             v-model="nombre"
                                            :counter="20"
                                            label="Nombre"
                                            required
                                        ></v-text-field>
                                    </v-col>

                                    <v-col
                                    cols="12"
                                    md="6"
                                    >
                                        <v-text-field
                                            
                                             v-model="apellido"
                                            :counter="20"
                                            label="Apellido"
                                            required
                                        ></v-text-field>
                                    </v-col>

                                    <v-col
                                    cols="12"
                                    md="6"
                                    >
                                        <v-text-field
                                             v-model="cedula"
                                            label="Cedula de Identidad"
                                            required
                                        ></v-text-field>
                                    </v-col>
                            </v-row>
            </v-container>
        </v-form>
        </div>
</template>

<script>
    export default {
        name:'componente-buscador',
        props: ['accion'],
        computed: {
           nombre: {
                get () {
                return this.$store.state.filterEstudiante.nombre
                },
                set (value) {
                this.$store.commit('setfilterEstudiante', {
                    filter: 'nombre',
                    value
                })
                }
            },
            apellido: {
                get () {
                return this.$store.state.filterEstudiante.apellido
                },
                set (value) {
                this.$store.commit('setfilterEstudiante', {
                    filter: 'apellido',
                    value
                })
                }
            },
            cedula: {
                get () {
                return this.$store.state.filterEstudiante.cedula
                },
                set (value) {
                this.$store.commit('setfilterEstudiante', {
                    filter: 'cedula',
                    value
                })
                }
            },
            titulo: {
                get () {
                return this.$store.state.filterProyecto.titulo
                },
                set (value) {
                this.$store.commit('setfilterProyecto', {
                    filter: 'titulo',
                    value
                })
                }
            },
            objGeneral: {
                get () {
                return this.$store.state.filterProyecto.objGeneral
                },
                set (value) {
                this.$store.commit('setfilterProyecto', {
                    filter: 'objGeneral',
                    value
                })
                }
            },
            codigo: {
                get () {
                return this.$store.state.filterProyecto.codigo
                },
                set (value) {
                this.$store.commit('setfilterProyecto', {
                    filter: 'codigo',
                    value
                })
                }
            },
            titulo2: {
                get () {
                return this.$store.state.filterservicios.titulo
                },
                set (value) {
                this.$store.commit('setfilterServicio', {
                    filter: 'titulo',
                    value
                })
                }
            },
            objGeneral2: {
                get () {
                return this.$store.state.filterservicios.objGeneral
                },
                set (value) {
                this.$store.commit('setfilterServicio', {
                    filter: 'objGeneral',
                    value
                })
                }
            },
            codigo2: {
                get () {
                return this.$store.state.filterservicios.codigo
                },
                set (value) {
                this.$store.commit('setfilterServicio', {
                    filter: 'codigo',
                    value
                })
                }
            },
        },
    }
</script>

<style lang="scss" scoped>

</style>