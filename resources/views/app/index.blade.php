<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pulp - The Programmer's Yelp</title>
  <link rel="stylesheet" href="/css/app.css"

</head>
<body id="app">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Pulp</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a v-link="{ path: '/'}">Home</a></li>
          <li><a v-link="{ path: '/subscriptions'}">Subscriptions</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <div class="container">
    <div class="top-box">
      <h1>Pulp - The Programmer's Yelp</h1>
      <p class="lead">Pulp is the ultimate destination for a personalized learning journey.</p>

    </div>
    <div class="row">
      <div class="container-fluid">


        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row come-in">
            <div>
              <router-view>

              </router-view>
            </div>


          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h2>Subscriptions</h2>
          <subscriptions></subscriptions>
        </div>

      </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.9.1/vue-resource.js"></script>
      <script src="{{ asset('/js/bundle.js') }}"></script>
    </body>
    </html>
