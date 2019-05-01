    @extends('layouts.app')

        @section('content')
       <h1>{{ $title }}</h1>
     <!--   <p>C'est un Projet de Promrnade avec Laravel</p> -->
       <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="/storage/photo/large_1556631886.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/storage/photo/matterhorn-918442__340_1556703282.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/storage/photo/europe-4149947__340_1556694005.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>


     <!--  <img style="width:100%" src="/storage/photo/large_1556631886.jpg"> -->
        
        @endsection




