require('./bootstrap');

window.Vue = require('vue');

import store from './store';
import moment from 'moment';
import router from './router';
import vuetify from './plugins/vuetify';
Vue.component('pie-pagina', require('./components/sub-component/footer').default);
Vue.component('buscador', require('./components/sub-component/buscador').default);
Vue.component('lista-proyectos', require('./components/estudiantes/tabla').default);
Vue.component('admin-component', require('./components/AdminComponent.vue').default);
Vue.component('docente-component', require('./components/DocenteComponent.vue').default);



const app = new Vue({
    vuetify,
    store,
    router,
    moment,
    mounted () {
        var urlKeeps = '/proyectos';
        axios.get(urlKeeps).then(response => {
        this.$store.commit('setProyectos',response.data)
        });
        var urlKeepsss = '/proyectosdeservicioscomu';
        axios.get(urlKeepsss).then(response => {
        this.$store.commit('setServicios',response.data)
        });
        var urlKeeps1 = '/get-pendientes';
        axios.get(urlKeeps1).then(response => {
        this.$store.commit('setPendientes',response.data)
        });
        var urlKeeps2 = '/get-procesos';
        axios.get(urlKeeps2).then(response => {
        this.$store.commit('setProcesos',response.data)
        });
        var urlKeeps3 = '/get-terminados';
        axios.get(urlKeeps3).then(response => {
        this.$store.commit('setTerminados',response.data)
        });
        var urlKeeps4 = '/get-docentes';
        axios.get(urlKeeps4).then(response => {
        this.$store.commit('setDocentes',response.data)
        });
    },
    el: '#app',
});
