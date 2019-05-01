<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
        <a class="navbar-brand" href="/">{{config('app.name', 'Promenade Avec laravel')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" href="/">Home </a></li>
            <li><a class="nav-link" href="/about">About</a></li>
        <!--    <li><a class="nav-link" href="/services">Services</a></li> -->
            <li><a class="nav-link" href="/promos">Les Promenades</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="/promos/create" class="btn btn-primary">Create Promenade</a></li>
        </div>
      </nav>
