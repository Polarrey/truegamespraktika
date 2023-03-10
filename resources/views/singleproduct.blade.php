@extends('layouts.app')

@section('content')

<div class="container">


    @foreach ($product as $xyz)
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="">
                <div class="img-fluid rounded">
                    <img src="{{ url('/img/tovary') }}/{{ $xyz->img }}" class="d-block w-90 " alt="tovar">
                </div>
                <div class="">
                    <h1 class="fw-bold">{{ $xyz->name }}</h1>
                    <h4>{{ $xyz->description }}</h4>
                    <h3 class="border-inline">{{ $xyz->price }} Рублей</h3>
                    <h4> Модель №{{ $xyz->model }}</h4>
                    <h5>{{ $xyz->year }}</h5>
                    @if (auth()->check())
                    @if ($xyz->count > 0)
                    <button type="button" class="btn btn-outline-primary"><a href="{{ Route('cartmake', $xyz->id) }}">В корзину</a></button>
                    @else
                    <a class="btn btn-primary disabled" href="">Отсутствует в наличии</a>
                    @endif
                    @else
                    <button type="button" class="btn btn-outline-primary"><a href="{{ url('/login') }}">Авторизируйтесь</a>
                        @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection