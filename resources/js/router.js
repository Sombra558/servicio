import Vue from 'vue'
import Router from 'vue-router'
//Admin Area
import Admin from './components/Admin/AreaAdminComponent';
import GeneralAdmin from './components/Admin/ControlGeneral/ControlGeneral';
import Registrar from './components/Admin/Registrar/VerificarComponent';
import Pendientes from './components/Admin/ProyectosPendientes/ProyectosPendientes';
import Procesos from './components/Admin/ProyectosAprobados/ProyectosAprobados';
import Todos from './components/Admin/ProyectosRegistrados/ProyectosRegistrados';
import Terminados from './components/Admin/ProyectosTerminados/ProyectosTerminados';
import DetallesPendiente from './components/Admin/DetallesProyectosPendientes/DetallesPendiente';

import RegistrarDocente from './components/Admin/Docentes/Emplear';
import DetallesUsuarioPorEmplear from './components/Admin/Docentes/RegistrarDocente';
import ListarDocente from './components/Admin/Docentes/ListaDocentes';


//Docentes Area
import Docente from './components/Docentes/AreaDocenteComponent.vue'
import GeneralDocente from './components/Docentes/ControlGeneral/ControlGeneral';
import ProcesosDocente from './components/Docentes/ProyectosAprobados/ProyectosAprobados';
import TerminadosDocente from './components/Docentes/ProyectosTerminados/ProyectosTerminados';
import DetallesPendienteDocente from './components/Docentes/DetallesProyectosPendientes/DetallesPendiente';
Vue.use(Router);


const router = new Router({
  mode: 'history',
  routes: [    
    {
      path: '/ControlAdmin',
      name: 'consoleadmin',
      component: Admin,
      redirect:'/ControlAdmin/general',
      children: [
        {
          path: 'general',
          name:'generaladmin',
          component: GeneralAdmin,
          meta: { title: 'Consola Admin' },
        },
        {
          path: 'Registrar-Proyecto',
          name:'registrarproyecto',
          component: Registrar,
          meta: { title: 'Registro de Proyecto' },
        },
        {
          path: 'Proyetos-Pendiente',
          name:'proyectospendientes',
          component: Pendientes,
          meta: { title: 'Pendiente de Proyecto' },
        },
        {
          path: 'Proyectos-Todos',
          name:'proyectostodos',
          component: Todos,
          meta: { title: 'Todos los Proyecto' },
        },
        {
          path: 'Proyetos-Procesos',
          name:'proyectosprocesos',
          component: Procesos,
          meta: { title: 'Procesos de Proyecto' },
        },
        {
          path: 'Proyetos-Terminados',
          name:'proyectosTerminados',
          component: Terminados,
          meta: { title: 'Proyecto Terminados' },
        },
        {
          path: '/ControlAdmin/Proyecto-Pendientes-Detalles/:codigo',
          name:'detallesPendiente',
          component: DetallesPendiente,
          meta: { title: 'Detalles' },
        },
        {
          path: 'Registrar-Docente',
          name:'registrardocente',
          component: RegistrarDocente,
          meta: { title: 'Registro un Docente' },
        },
        {
          path: '/Empleado/:id',
          name:'panelporAsignar',
          component: DetallesUsuarioPorEmplear,
          meta: { title: 'Emplear Usuario' },
        },
        {
          path: 'Lista-Docente',
          name:'listadocente',
          component: ListarDocente,
          meta: { title: 'Lista de Docente' },
        }
        
      ]
    },
    {
      path: '/Docente',
      name: 'consoledocente',
      component: Docente,
      redirect:'/Docente/general',
      children: [
        {
          path: 'general',
          name:'generaldocente',
          component: GeneralDocente,
          meta: { title: 'Consola Docente' },
        },
        {
          path: 'Proyetos-Procesos',
          name:'proyectos-docentes-procesos',
          component: ProcesosDocente,
          meta: { title: 'Procesos de Proyecto' },
        },
        {
          path: 'Proyetos-Terminados',
          name:'proyectos-docentes-Terminados',
          component: TerminadosDocente,
          meta: { title: 'Proyecto Terminados' },
        },
        {
          path: '/Docente/Proyecto-Pendientes-Detalles/:codigo',
          name:'detallesPendienteDocenteEncargado',
          component: DetallesPendienteDocente,
          meta: { title: 'Detalles' },
        },
      ]
    },
  ]
  
});


export default router;
