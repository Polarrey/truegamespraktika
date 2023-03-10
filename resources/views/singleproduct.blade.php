@extends('layouts.app')

@section('content')

<div class="container">


    @foreach ($product as $xyz)
    <div class="border mt-3 mb-3">
        <div class="">
            <div class="">
                <div class="">
                    <img src="{{ url('/img/tovary') }}/{{ $xyz->img }}" class="d-block w-100 " alt="tovar">
                </div>
                <div class="">
                    <h1>{{ $xyz->name }}</h1>
                    <h4>{{ $xyz->description }}</h4>
                    <h3>{{ $xyz->price }} Рублей</h3>
                    <h3>модель {{ $xyz->model }}</h3>
                    <h1>{{ $xyz->year }}</h1>
                    @auth
                    <a class="btn btn-info" href="{{ url('/cart/make') }}/{{ $xyz->id }}" role="button">В корзину
                    </a>  <!-- норм кнопка -->
                    <button class="btn-3">
                        <a href="{{url('/catalog/singleproduct')}}/{{$xyz->id}}">Купить</a></button>
                    @endauth

                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection