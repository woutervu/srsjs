<template>
  <div :class="alertClasses" v-show="show">
      <slot></slot>
      <span class="alert_close" @click="show = false">X</span>
  </div>
</template>

<script>
export default {

  props: ['type'],

  data(){
    return {
      show: true
    };
  },

  computed: {
    alertClasses(){
      var type = this.type;
        return {
            'alert' : true,
            'alert_success': type == 'success',
            'alert_error' : type == 'error'
        }
    }
  }

}
</script>
