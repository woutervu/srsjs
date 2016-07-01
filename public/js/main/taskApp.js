Vue.component('tasks', {
  template: '#tasks-template',

  data: function(){
    return {
      list: []
    };
  },

  created: function(){
    this.fetchTaskList();

  },

  methods: {
    fetchTaskList: function(){
      var resource = this.$resource('api/tasks{/id}');

      resource.get({}).then((tasks) => {
          this.$set('list', tasks.json())
      });

    },

    deleteTask: function(task){
      this.list.$remove(task);
    },
  },


});

new Vue({
  el: 'body',
});
