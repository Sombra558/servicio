<template>
    <div>
            <v-flex  xs10  offset-xs1>
                <v-card>
                    <v-card-title>Nombre:{{producto.name}}</v-card-title>
                    <v-card-subtitle>Cédula: {{producto.id}}</v-card-subtitle>
                    <v-card-text>Correo: {{producto.email}}</v-card-text>
                    <v-card-actions>Registrado: {{producto.created_at}}</v-card-actions>
                </v-card>
                <br>
                <v-card>
                    <v-form @submit.prevent="AsignarRol" max-width="100%">
                        
                           
                         
                            
                           <v-select
                                v-model="value"
                                :items="items"
                      
                                label="Rol"
                                 name="selector-rol"
                                required
                            ></v-select>
                            
                  
                           <v-divider></v-divider>
                             <v-btn type="submit">Asignar Rol</v-btn>
                    </v-form>
                       
                </v-card>
                 
      
       
        
    </v-flex>
    </div>
</template>

<script>
    export default {
        name: 'detalles',
        data(){
            return{
                producto:[],
                ruta:this.$route.params.id,
                items:[
                    {
                        value:2,
                        text:'Docente'
                    }],
                value:0,
            }
        },
        mounted () {
            var urlKeeps = '/user/'+this.ruta;
      
            axios.get(urlKeeps).then(response => {
            this.producto = response.data
            });
           
        },
         methods:{
            AsignarRol: function() {
            var url = '/update/'+this.ruta;
            axios.put(url,{
                rol:this.value,
            }).then(response => {
                    var urlKeeps4 = '/get-docentes';
                    axios.get(urlKeeps4).then(response => {
                    this.$store.commit('setDocentes',response.data)
                    this.$router.push('/ControlAdmin');
                    });
                    
    		})
            },
           
      }
    }
</script>

<style  scoped>
    .flexi{
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }
    @media only screen and (max-width: 600px) {
        .flexi{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    }
</style>