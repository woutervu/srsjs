var Vue = require('vue');
var VueResource = require('vue-resource');
var VueRouter = require('vue-router');

Vue.use(VueResource);
Vue.use(VueRouter);



var router = new VueRouter();



import Tutorial from './views/Tutorial.vue';
import Subscriptions from './components/Subscriptions.vue';

router.map({
  '/': {
    name: 'home',
    component: Tutorial
  },
  '/tutorials/:id': {
    name: 'tutorial.show',
    component: Tutorial
  }
});



var App = Vue.extend({
  el: '#app',

  components:{ Tutorial, Subscriptions },

  ready(){
    // alert("App.js compiled!");
  }
});

router.start(App, '#app');
