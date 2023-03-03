@extends('layouts.app')

@section('content')
<style>
</style>
<div class="container">
    <div class="card">
        <!-- карточка с лого и девизом-->
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <img src="../resources/img/logo.png" alt="logo"> <!-- лого -->
                </div>
                <div class="col-8">
                    <h1>ДЛЯ ТЕХ, КТО
                        <!-- девиз -->
                        ПРИВЫК ПОБЕЖДАТЬ
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($prod as $pp)
            @if($loop->first)
            <div class="carousel-item active">
                @else
                <div class="carousel-item">
                    @endif
                    <img src="{{ $pp->img }}" class="d-block mx-auto carousel-img" alt="tovar">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="name_tovar">{{ $pp->name }}</h1>
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
    </div>
    @endsection