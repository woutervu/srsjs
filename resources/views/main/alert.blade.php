<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <title>Main</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/app.css"
    </head>
    <body id="app">
      <div class="container">
        <h1>Alert</h1>
        <alert type="success">
            <strong>Success!</strong> Your account has been updated.
        </alert>

        <alert type="error">
            <strong>Error!</strong> There was an error processing your request.
        </alert>
      </div>



      <template id="alert-template">
          <div :class="alertClasses" v-show="show">
              <slot></slot>
              <span class="alert_close" @click="show = false">X</span>
          </div>
      </template>

        <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="{{ asset('/js/vendor/vue.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.9.1/vue-resource.js"></script>
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>
