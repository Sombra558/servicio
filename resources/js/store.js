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
       filterProyecto:{
        codigo: '',
        titulo: '',
        objGeneral: '',
      },
      filterservicios:{
        codigo: '',
        titulo: '',
        objGeneral: '',
      },
      filterEstudiante:{
        cedula: '',
        nombre: '',
        apellido: '',
      }
       
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
      setfilterEstudiante(state,data){
        state.filterEstudiante[data['filter']]=data.value;
    },
    setfilterProyecto(state,data){
      state.filterProyecto[data['filter']]=data.value;
  },
  setfilterServicio(state,data){
    state.filterservicios[data['filter']]=data.value;
},
    setImagenes(state,  Imagenes){
      state. Imagenes =  Imagenes;
     
  }
        
    },
    getters: {
      
      filteredProyectosPublicos (state) {
        let proyectos_publico = state.proyectos_publico;
        if (state.filterProyecto.codigo.length > 1) {
          proyectos_publico = proyectos_publico.filter(proyecto => String(proyecto.codigo).includes(state.filterProyecto.codigo));
        }
        if (state.filterProyecto.titulo.length > 1) {
          proyectos_publico = proyectos_publico.filter(proyecto => proyecto.titulo.includes(state.filterProyecto.titulo));
        }
        if (state.filterProyecto.objGeneral.length > 1) {
          proyectos_publico = proyectos_publico.filter(proyecto => proyecto.objGeneral.includes(state.filterProyecto.objGeneral));
        }
        return proyectos_publico;
      },
          filteredProyectos (state) {
            let proyectos = state.proyectos;
           
            return proyectos;
          },
          filteredServicio (state) {
            let servicios = state.servicios;
            if (state.filterservicios.codigo.length > 1) {
              servicios = servicios.filter(proyecto => String(proyecto.codigo).includes(state.filterservicios.codigo));
            }
            if (state.filterservicios.titulo.length > 1) {
              servicios = servicios.filter(proyecto => proyecto.titulo.includes(state.filterservicios.titulo));
            }
            if (state.filterservicios.objGeneral.length > 1) {
              servicios = servicios.filter(proyecto => proyecto.objGeneral.includes(state.filterservicios.objGeneral));
            }
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
            if (state.filterEstudiante.cedula.length > 1) {
              estudiantes = estudiantes.filter(estudiante => String(estudiante.cedula).includes(state.filterEstudiante.cedula));
            }
            if (state.filterEstudiante.nombre.length > 1) {
              estudiantes = estudiantes.filter(estudiante => estudiante.nombre.includes(state.filterEstudiante.nombre));
            }
            if (state.filterEstudiante.apellido.length > 1) {
              estudiantes = estudiantes.filter(estudiante => estudiante.apellido.includes(state.filterEstudiante.apellido));
            }
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