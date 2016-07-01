<!-- Dit component is verantwoordelijk voor het weergeven van tuturials in een gebruikersfeed.
**   De gebruiker abonneert zich op bepaalde categories, zoals PHP, Laravel, Vue.js, etc.
**   In de feed komen dan relevante tutorials te staan.
-->
<template>
  <h2>Feed</h2>
<!-- Loop door alle data heen en weergeef deze in de respectievelijke HTML elementen -->
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
          <!-- Als er nog geen rating is, staat er "Not yet rated"; Als er een rating is, wordt deze weergeven als X out of 5 -->
          Rating: <strong v-if="tut.rating > 0">{{ tut.rating }} out of 5</strong><strong v-else>Not yet rated</strong>
        </p>
        <p>
          <a v-link="{ name : 'tutorial.show', params : { id : tut.id } }" class="btn btn-warning">Discussion</a>
        </p>
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
  props: ['tuts', 'subscriptions', 'categories'],

  /**
   * data - zet default values voor onze properties. In dit geval
   * zijn dat objecten.
   *
   * @return {type} obj - geeft object met objecten terug.
   */
  data(){
    return {
      tuts: [],
      subscriptions: [],
      categories: []
    };
  },


  /**
   * Hier komen alle filters te staan. Filters zijn bedoeld om
   * data te manipuleren.
   */
  filters: {

    /**
     * truncate - deze functie maakt een string korter met 'value'
     * en zet er vervolgens '...' achter. Zo voorkomen we lange stukken
     * tekst.
     *
     * @param  {type} string - de string die verkort moet worden
     * @param  {type} value  - het aantal karakters wat de string moet worden
     * @return {type} string - geeft de verkorte string met '...' terug.
     */
    truncate(string, value) {
        return string.substring(0, value) + '...';
    }
  },

  /**
   * Hier definiëren we alle methods die we nodig hebben.
   */
  methods: {

    /**
     * fetchTutorials - deze functie haalt de tutorials op.
     * Vervolgens slaan we deze data op in de 'tutorials'
     * property.
     *
     * @return {type} void - geen return type, er wordt enkel een
     * property gezet.
     */
    fetchTutorials(){
      var resource = this.$resource('api/tutorials/{id}');
      resource.get({}).then((tuts) => {
          this.$set('tuts', tuts.json());
      });
    },


    /**
     * fetchSubscriptions - deze functie haalt de categories op
     * waarop de gebruiker geabonneert is.
     *
     * @return {type} void - geen return type, er wordt enkel een
     * property gezet.
     */
    fetchSubscriptions(){
      var resource = this.$resource('api/subscriptions');
      resource.get({}).then((subscriptions) => {
          this.$set('subscriptions', subscriptions.json());
      });
    },

    /**
     * fetchCategories - deze functie haalt de categories op.
     *
     * @return {type} void - geen return type, er wordt enkel een
     * property gezet.
     */
    fetchCategories(){
      var resource = this.$resource('api/categories');
      resource.get({}).then((categories) => {
          this.$set('categories', categories.json());
      });
    },

    /**
     * parseCategory - deze functie checked of de gebruiker geabonneerd
     * is op de gegeven categorie.
     *
     * @param  {type} string - Geeft shorthand om te vergelijken.
     * @return {type} boolean - Geeft true of false terug.
     */
    parseCategory(shorthand){
      for (var i = 0; i < this.categories.length; i++) {
        if(this.categories[i].shorthand == shorthand){
          return true;
        }else{
          return false;
        }
      }
    }
  },

  /**
   * ready - als het component klaar is met laden,
   * voert het een enkele functie uit.
   *
   * @return {type} void - geen return type, er worden enkele
   * functies uitgevoerd.
   */
  ready(){
    this.fetchTutorials();
    this.fetchSubscriptions();
    this.fetchCategories();
  }

}
</script>
