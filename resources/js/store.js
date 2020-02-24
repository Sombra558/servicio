import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

export default new Vuex.Store({
    state:{
      proyectos_publico:[],
       proyectos:[],
       servicios:[],
       pendientes:[],
       procesos:[],
       terminados:[],
       estudiantes:[],
       docentes:[],
       procesosDocentes:[],
       terminadosDocentes:[],
       objetivos:[],
       actividades:[],
       Imagenes:[],
       
    },
    mutations:{
        setProyectos(state, proyectos){
            state.proyectos = proyectos;
           
        },
        setServicios(state, servicios){
          state.servicios = servicios;
         
      },
        setProyectosPublicos(state, proyectos_publico){
          state.proyectos_publico = proyectos_publico;
         
      },
        setPendientes(state, pendientes){
          state.pendientes = pendientes;
         
        },
        setProcesos(state, procesos){
        state.procesos = procesos;
       
        },
        setDocentes(state, docentes){
          state.docentes = docentes;
         
          },
        setTerminados(state, terminados){
          state.terminados = terminados;
         
        },
        setTerminadosDocentes(state, terminadosDocentes){
          state.terminadosDocentes = terminadosDocentes;
         
        },
        setProcesosDocentes(state, procesosDocentes){
          state.procesosDocentes = procesosDocentes;
         
        },
        setObjetivos(state, objetivos){
          state.objetivos = objetivos;
         
        },
        setEstudiantes(state, estudiantes){
            state.estudiantes = estudiantes;
           
        },
        setActividades(state, actividades){
          state.actividades = actividades;
         
      },
    setImagenes(state,  Imagenes){
      state. Imagenes =  Imagenes;
     
  }
        
    },
    getters: {
      
      filteredProyectosPublicos (state) {
        let proyectos_publico = state.proyectos_publico;
        
        return proyectos_publico;
      },
          filteredProyectos (state) {
            let proyectos = state.proyectos;
            
            return proyectos;
          },
          filteredServicio (state) {
            let servicios = state.servicios;
            
            return servicios;
          },
          filteredPendientes (state) {
            let pendientes = state.pendientes;
            
            return pendientes;
          },
          filteredProcesos (state) {
            let procesos = state.procesos;
            
            return procesos;
          },
          filteredTerminados (state) {
            let terminados = state.terminados;
            
            return terminados;
          },
          filteredProcesosDocentes (state) {
            let procesosDocentes = state.procesosDocentes;
            
            return procesosDocentes;
          },
          filteredTerminadosDocentes (state) {
            let terminadosDocentes = state.terminadosDocentes;
            
            return terminadosDocentes;
          },
          filteredDocentes (state) {
            let docentes = state.docentes;
            
            return docentes;
          },
          filteredEstudiantes (state) {
            let estudiantes = state.estudiantes;
            
            return estudiantes;
          },
          filteredObjetivos (state) {
            let objetivos = state.objetivos;
            
            return objetivos;
          },
          filteredActividades (state) {
            let actividades = state.actividades;
            
            return actividades;
          },
          filteredImagenes (state) {
            let Imagenes = state.Imagenes;
            
            return Imagenes;
          },

    }
})