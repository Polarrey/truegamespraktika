@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title"> 
          <img class="w-50 mx-auto d-block" src="\public\img\logo.svg" alt="#">
          <h1 class="text-center">Лучшие игры и девайсы - это про нас!</h1>
            
    </div>

    <h2 class="mt-5 text-center"> Новинки  </h2>
    <div id="carouselExample" class="mt-3 carousel slide">
    
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach ($product as $xyz)
      @if($loop->first)
        <div class="carousel-item active">
      @else
        <div class="carousel-item">
      @endif
      <img src="{{url('/img/tovary')}}/{{ $xyz->img }}" class="d-block w-100 fixheight" alt="#">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="custom-text">{{ $xyz->name }}</h1>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    @endsection