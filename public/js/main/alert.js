var Vue = require('vue');
import Alert from '/js/app/components/Alert.vue';

new Vue({
  el: '#app'

  components: { Alert },

  ready: function(){
    alert("Ready to go!");
  }
});
