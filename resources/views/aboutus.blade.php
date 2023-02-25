@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title"> 
            <h1 class="text-center">Лучшие игры и девайсы - это про нас!</h1>
    </div>
<br>
    <h2 class="mt-3 text-center"> Новинки компании   </h2>
    <div id="carouselExample" class="mt-3 carousel slide">
    
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="\public\img\ps.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="\public\img\terraria.jpg" class="d-block w-100" alt="...">
    </div>  
    <div class="carousel-item">
      <img src="\public\img\nintendoswitch.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




</div>
@endsection
