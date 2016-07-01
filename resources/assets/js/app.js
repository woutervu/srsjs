
/**
 * Hier worden alle modules ingeladen.
 */
var Vue = require('vue');
var VueResource = require('vue-resource');
var VueRouter = require('vue-router');


/**
 * Laat vue de modules daadwerkelijk gebruiken
 */
Vue.use(VueResource);
Vue.use(VueRouter);



/**
 * Maak een nieuwe router aan.
 * Zo kunnen we zonder een refresh de URL aanpassen.
 */
var router = new VueRouter();



/**
 * Importeer alle components uit de views folder.
 * De naam wordt hier gezet, zodat we er in ons App object
 * naar kunnen verwijzen.
 */
import Feed from './views/Feed.vue';
import Tutorial from './views/Tutorial.vue';
import Subscriptions from './views/Subscriptions.vue';


/**
 * De router mapping.
 * Hier krijgt elke route een naam (zodat hiernaar verwezen
 * kan worden in anchors/andere plaatsen in de code)
 */
router.map({
  '/': {
    name: 'home',
    component: Feed
  },
  '/tutorials/:id': {
    name: 'tutorial.show',
    component: Tutorial
  }
});



/**
 * De daadwerkelijke app.
 * Alle verdere logica en
 * requests naar de server wordt vanuit de views/components gedaan
 */
var App = Vue.extend({
  el: '#app',

  /**
   * components - hier worden de verschillende views ingeladen
   */
  components:{ Feed, Tutorial, Subscriptions },

});


/**
 * Start de router, zodat onze routes werken.
 */
router.start(App, '#app');
