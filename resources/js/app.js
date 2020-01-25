/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// man comment s

require('./AdminPage/popper.min');
window.$ = window.jQuery =require('./AdminPage/jquery-3.3.1.min');
require('./AdminPage/jquery-ui.min');
require('./AdminPage/bootstrap.min');
require('./AdminPage/Admin');
require('./AdminPage/morris.min');
require('./AdminPage/jquery.sparkline.min');
require('./AdminPage/jquery-jvectormap-1.2.2.min');
require('./AdminPage/jquery-jvectormap-world-mill-en');
require('./AdminPage/datepicker/bootstrap-datepicker');
require('./AdminPage/Treeview');
require('./AdminPage/bootstrap-select-1.13.7/dist/js/bootstrap-select.min');

// require('./AdminPage/datatables/dataTables.bootstrap4');
require('./AdminPage/datatables/jquery.dataTables.min');
require('./AdminPage/jquery.slimscroll.min');
require('./AdminPage/fastclick.min');
require('./AdminPage/adminlte.min');
require('./AdminPage/demo');
require('./AdminPage/dashboard');
require('./AdminPage/jquery.knob');


require('./bootstrap');

// man comment e



window.$ = window.jQuery = require('jquery');



require('./jsfront/imagesloaded.pkgd.min');
require('./jsfront/jquery-3.3.1.min');
require('./jsfront/bootstrap.min');
require('./jsfront/jquery-ui.min');
require('./jsfront/jquery.countdown.min');
require('./jsfront/jquery.nice-select.min');
require('./jsfront/jquery.zoom.min');
// require('./jsfront/jquery.dd.min');
require('./jsfront/jquery.slicknav');
require('./jsfront/owl.carousel.min');
require('./jsfront/main');


// man comment s

window.Vue = require('vue');

// man comment e

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


// man comment s
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// man comment e

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


// man comment s
const app = new Vue({
    el: '#app',
});
// man comment e
