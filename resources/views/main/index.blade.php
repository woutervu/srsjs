<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <title>Main</title>
        <style>
          h1{
            color: lightblue;
            margin: 5px;
          }
          button.upgrade{
            display: block;
            border: 1px solid darkblue;
            background-color: lightblue;
            padding: 5px;
          }
        </style>
    </head>
    <body>
      <div id="app">
        <div v-for="plan in plans">
          <plan :plan="plan" :active.sync="active"><plan>
      </div>

      <template id="plan-template">
        <h1>@{{ plan.name }} | €@{{ plan.price }},-/month</h1>
        <button class="upgrade"
                @click="setActivePlan"
                v-show="plan.name !== active.name">
                @{{ isUpgrade ? 'Upgrade' : 'Downgrade' }}
        </button>
        <span v-else>Selected Plan</span>
      </template>


        <script src="{{ asset('/js/vendor/vue.js') }}"></script>
        <script src="{{ asset('/js/main/app.js') }}"></script>
    </body>
</html>
