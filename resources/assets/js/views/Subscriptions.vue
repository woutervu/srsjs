<template>

</template>

<script>
export default {

  props: ['subscriptions'],

  data(){
    return {
      // tutorial: [],
      // comments: [],
      // users: []
    };
  },

  methods: {
    fetchSubscriptions(){
      
    }
  },

  ready(){
    this.fetchTutorial();
    this.fetchUsers();
  }

}
</script>
