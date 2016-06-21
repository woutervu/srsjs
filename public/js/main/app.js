Vue.component('counter', {
  template: '#counter-template',
  props: ['subject'],
  data: function(){
    return { count: 0 };
  }
});

new Vue({
    el: '#app',
    data: {
      plans: [
        { name: 'Enterprise', price: 100 },
        { name: 'Pro', price: 50 },
        { name: 'Personal', price: 10 },
        { name: 'Free', price: 0 },
      ],
      active: { name: 'Enterprise', price: 100 },
    },

    components: {
      plan: {
        template: '#plan-template',

        props: ['plan', 'active'],

        computed: {
          isUpgrade: function(){
              return this.plan.price > this.active.price;
          }
        },

        methods: {
          setActivePlan: function(){
            this.active = this.plan;
          },
        }
      }
    }

});
