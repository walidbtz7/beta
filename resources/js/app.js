/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('mosque', require('./components/mosque.vue').default);
Vue.component('imam', require('./components/Imam.vue').default);
Vue.component('coran', require('./components/step/Coran.vue').default);
Vue.component('fin', require('./components/step/Fin.vue').default);
Vue.component('comReligieuses', require('./components/step/ComReligieuses.vue').default);
Vue.component('experience', require('./components/step/Expérience.vue').default);
Vue.component('futur', require('./components/step/Futur.vue').default);
Vue.component('personnel', require('./components/step/Personnel.vue').default);
Vue.component('recherche', require('./components/step/recherche.vue').default);
Vue.component('religieuse', require('./components/step/Religieuse.vue').default);
Vue.component('scolaire', require('./components/step/Scolaire.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});