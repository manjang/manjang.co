require('./bootstrap');


require('./imagesloaded.pkgd.min');
require('./TweenMax.min');
require('./base');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy);

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

var app = new Vue({
    el: '#app',
    data: {}
});