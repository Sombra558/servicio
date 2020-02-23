<template>
    <div>
      
            <v-container fluid grid-list-md text-xs-center>
              <v-layout row wrap >
                  <v-flex xs12 md3>
    <v-card
    max-width="100%"
                
              >
    <v-toolbar
      color="#0E6876"
      
    >
    

      <v-toolbar-title class="white--text">Consola Docente</v-toolbar-title>

      <v-spacer></v-spacer>

    </v-toolbar>

    <v-list>
      <v-list-group
        v-for="item in items"
        :key="item.value"
        v-model="item.active"
        no-action
      >
        <template v-slot:activator>
          
          <v-list-item-content @click="$router.push(item.to)">
            <v-list-item-title class="colorletras" v-text="item.title"></v-list-item-title>
          </v-list-item-content>
 
        </template>

        <v-list-item class="alaizquierda"
          v-for="subItem in item.items"
          :key="subItem.title"
     
        >
          <v-list-item-content @click="$router.push(subItem.to)">
       
             
            <v-list-item-title class="colorletras" v-text="subItem.title"></v-list-item-title>
        
      
          </v-list-item-content>
        </v-list-item>
      </v-list-group>
    </v-list>
  </v-card>
        </v-flex>  
        <v-flex xs12 md9>
                      <router-view></router-view>
                    </v-flex>  
        </v-layout>
            </v-container>
         
               
    </div>
</template>

<script>
    export default {
        name:'Admin-Component',
           data(){
            return{
                items: [
                            {
                                action: 'local_activity',
                                value: 1,
                                title: 'Control General',
                                to: '/Docente',
                            },
                            {
                                action: 'local_activity',
                                value: 2,
                                title: 'Proyectos',
                                to:'#',
                                items: [
                      
                                    { title: 'Docentes Proyectos En Proceso', to: '/Docente/Proyetos-Procesos'},
                                    { title: 'Docentes Proyectos Terminados', to: '/Docente/Proyetos-Terminados'},
                    
                                ],
                            }
                        ],
                }
            },
    }
</script>

<style scoped>

.colorletras{
  color:#000000;
  font-weight: bold;
}

</style>