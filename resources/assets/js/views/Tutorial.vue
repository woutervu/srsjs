<template>
  <h2>Tutorials</h2>
  <nav>
    <a v-link="{ name: 'home' }">Home</a>
    <a v-link="{ name: 'tutorial.show', params: { id : 2}}">Show</a>
  </nav>

  <div class="col-lg-6 col-md-6 col-sm-12 tutCard" v-for="tut in tuts">
    <div class="panel panel-{{ tut.shorthand }}">
      <div class="panel-heading">{{ tut.title }}</div>
      <div class="panel-body">
        <p class="lead">{{ tut.description | truncate '150'}}</p>
        <p>
          <a href="{{ tut.url }}" target="_blank">Go to tutorial!</a>
        </p>
        <hr />
        <p>
          Rating: <strong v-if="tut.rating > 0">{{ tut.rating }} out of 5</strong><strong v-else>Not yet rated</strong>
        </p>
        <p>
          <a v-link="{ path: '/tutorial/tut.id }}' }" class="btn btn-warning">Discussion</a>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {

  props: ['type', 'tuts'],

  data(){
    return {
      tuts: []
    };
  },

  filters: {
    truncate(string, value) {
        return string.substring(0, value) + '...';
    }
  },

  methods: {
    fetchTutorials(){
      var resource = this.$resource('api/tutorials/{/id}');

      resource.get({}).then((tuts) => {
          this.$set('tuts', tuts.json());

          console.log(this.tuts);
      });

    }
  },

  ready(){
    this.fetchTutorials();
  }

}
</script>
