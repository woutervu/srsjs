var Vue = require('vue');
import Alert from './components/Alert.vue';

new Vue({
  el: '#app',

  components: { Alert },

  methods: {
    alertMe(id){
      alert("ALERT" + id)
    }
  },

  ready(){
    alert("Ready to go!");
  }
});
