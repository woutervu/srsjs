<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <title>Main</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
      <div class="container">
        <tasks></tasks>
      </div>



      <template id="tasks-template">
        <h1>My Tasks</h1>
        <ul class="list-group">
              <li class="list-group-item" v-for="task in list">
                @{{ task.body }}

                <strong v-on="deleteTask(task)">X</strong>
              </li>
        </ul>
      </template>

        <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="{{ asset('/js/vendor/vue.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.9.1/vue-resource.js"></script>
        <script src="{{ asset('/js/main/taskApp.js') }}"></script>
    </body>
</html>
