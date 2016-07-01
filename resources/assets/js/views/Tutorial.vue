<!-- Dit component is verantwoordelijk voor het weergeven van de details van één enkele tutorial
**   Daarnaast worden hier comments weergeven en kunnen deze geplaatst worden
-->


<!-- Definieer een template.
**   Alle data wordt hier in weergegeven.
-->
<template>
  <h2>Tutorial</h2>
  <!-- Loop door alle data heen en weergeef deze in de respectievelijke HTML elementen -->
  <div class="col-lg-12 col-md-12 col-sm-12 tutCard" v-for="data in tutorial">
    <div class="panel panel-{{ data.shorthand }}">
      <div class="panel-heading">{{ data.title }}</div>
      <div class="panel-body">
        <p class="lead">{{ data.description }}</p>
        <p>
          <a href="{{ data.url }}" target="_blank">Go to tutorial!</a>
        </p>
        <hr />
        <p>
          <!-- Als er nog geen rating is, staat er "Not yet rated"; Als er een rating is, wordt deze weergeven als X out of 5 -->
          Rating: <strong v-if="data.rating > 0">{{ data.rating }} out of 5</strong><strong v-else>Not yet rated</strong>
        </p>
        <p>
        </p>
      </div>
    </div>
  </div>
  <hr />
  <div class="col-lg-12 col-md-12 col-sm-12">
    <h2>Discussion</h2>
    <div class="media" v-for="comment in comments">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://wiseheartdesign.com/images/articles/default-avatar.png" alt="">
      </a>
      <div class="media-body">
        <!-- parseUser(id) geeft de naam van de gebruiker terug -->
        <h4 class="media-heading">{{ parseUser(comment.user_id) }}
          <small>August 25, 2014 at 9:30 PM</small>
        </h4>
        {{ comment.comment }}
      </div>
    </div>
  </div>
</template>

<!-- Het daadwerkelijke component
Hier staat alle logica van deze view in -->
<script>

/**
 * export default - Omdat we de naam al hebben gegeven
 * in app.js (voor compilation), hoeven we hier enkel "export default" te gebruiken
 */
export default {


  /**
   * props - alle properties die we nodig hebben in deze view/component
   */
  props: ['tutorial', 'comments', 'users'],


  /**
   * data - zet default values voor onze properties. In dit geval
   * zijn dat objecten.
   *
   * @return {type} obj - geeft object met objecten terug.
   */
  data(){
    return {
      tutorial: [],
      comments: [],
      users: []
    };
  },

  /**
   * Hier definiëren we alle methods die we nodig hebben.
   */
  methods: {

    /**
     * fetchTutorial - deze functie haalt de tutorial op met het id
     * uit de route. Vervolgens slaan we deze data op in de 'tutorial' en
     * 'comments' properties resp.
     *
     * @return {type} void - geen return type, er worden enkel properties gezet.
     */
    fetchTutorial(){
      var id = this.$route.params.id;
      var resource = this.$resource('api/tutorials/' + id);

      resource.get({}).then((tutorial) => {
        this.$set('tutorial', tutorial.json());
        this.$set('comments', tutorial.json()[0].comment);
      });
    },

    /**
     * fetchUsers - haal alle gebruikers op en sla
     * deze op in de 'users' property.
     *
     * @return {type} void - geen return type, er worden enkel properties gezet.
     */
    fetchUsers(){
      var resource = this.$resource('api/users/');
      resource.get({}).then((users) => {
        this.$set('users', users.json());
      });
    },

    /**
     * parseUser - loop door alle users heen en geef naam van de
     * gebruiker terug.
     *
     * @param  {type} id - dit is de user id
     * @return {type} string - geeft string (naam) terug
     */
    parseUser(id){
      for (var i = 0; i < this.users.length; i++) {
        if(this.users[i].id == id){
          return this.users[i].name;
        }
      }
    }
  },


  /**
   * ready - als het component klaar is met laden,
   * voert het enkele functies uit
   *
   * @return {type} void - geen return type, er worden enkel functies uitgevoerd.
   */
  ready(){
    this.fetchTutorial();
    this.fetchUsers();
  }
}
</script>
