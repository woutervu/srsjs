<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <title>Main</title>
        <style>
          .completed{
            text-decoration: line-through;
          }
        </style>
    </head>
    <body>
      <div id="app">
        <tasks :list="tasks">
        </tasks>
      </div>



      <template id="tasks-template">
        <h1>My Tasks <span v-show="remaining">(@{{ remaining }})</span></h1>
        <ul v-show=list.length>
          <li v-for="task in list"
              :class="{'completed' : task.completed }"
              @click="task.completed = ! task.completed"
          >
              @{{ task.body }}
              <strong @click="deleteTask(task)">x</strong>
            </li>
        </ul>
        <p v-else>You don't have any tasks.</p>

        <button @click="clearCompleted">Clear Completed</button>
      </template>



        <script src="{{ asset('/js/vendor/vue.js') }}"></script>
        <script src="{{ asset('/js/main/lists.js') }}"></script>
    </body>
</html>
