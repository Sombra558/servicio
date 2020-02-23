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
                                            
                                           
                                            :counter="20"
                                            label="descripcion"
                                            required
                                        ></v-text-field>
                                    </v-col>

                                     <v-col class="d-flex" cols="12" sm="6">
                                        <v-select
                                        :items="items"
                                        label="Seleccione"
                                        solo
                                        ></v-select>
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
        data: () => ({
            items: ['En Proceso', 'Terminado',],
        }),
    }
</script>

<style lang="scss" scoped>

</style>