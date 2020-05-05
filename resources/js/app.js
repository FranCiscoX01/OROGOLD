
require('./bootstrap');
import Axios from 'axios';
window.Vue = require('vue');


import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';
Vue.config.productionTip = false;
Vue.use(Antd);


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
/**
 * Home
 */
Vue.component('date-component', require('./components/DateComponent.vue').default);


const app = new Vue({
    el: '#app'
});
