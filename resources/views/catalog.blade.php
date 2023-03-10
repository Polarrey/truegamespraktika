@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex">
            <!--сортировка и фильтр-->
            <div class="d-flex mb-3 me-auto">
                <!--селектор с сортировкой-->
                <div class="dropdown mb-3 btn-group">
                    <div class="dropdown mx-1">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            По году
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a href="{{ url('/catalog/sort') }}/year/desc" class="dropdown-item">По убыванию</a>
                            </li>
                            <li>
                                <a href="{{ url('/catalog/sort') }}/year/asc" class="dropdown-item">По возрастанию</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown mx-1">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            По наименованию
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a href="{{ url('/catalog/sort') }}/name/desc" class="dropdown-item">По наименованию ↓</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown mx-1">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            По стоимости
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a href="{{ url('/catalog/sort') }}/price/desc" class="dropdown-item">По убыванию</a>
                            </li>
                            <li>
                                <a href="{{ url('/catalog/sort') }}/price/asc" class="dropdown-item">По возрастанию</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mx-3">
                    <!--Сброс по умолчанию-->
                    <a class="btn btn-outline-primary" href="{{ url('/catalog') }}" role="button">Сбросить настройки</a>
                </div>
                <!--Список категорий-->
                <ul>
                    @foreach ($cat as $zzz)
                    <div class="btn-group">
                        <div class="dropdown-item">
                            <a class="btn d-block" href="{{ url('/catalog/filter') }}/{{ $zzz->id }}">{{ $zzz->name }}</a>
                        </div>
                    </div>
                    @endforeach
                </ul>
            </div>
        </div>



        <div class="album py-5 bg-light">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($product as $xyz)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ url('/img/tovary') }}/{{ $xyz->img }}" class="carding-img d-block w-100 " alt="tovar">
                        <div class="card-body">
                            <h1 class="card-text">{{ $xyz->name }}</h1>
                            <h1 class="card-text">{{ $xyz->price }} &#8381</h1>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    @if (auth()->check())
                                    @if ($xyz->count > 0)
                                    <button type="button" class="btn btn-outline-primary"><a href="{{ Route('cartmake', $xyz->id) }}">В корзину</a></button>
                                    @else
                                    <a class="btn btn-primary disabled" href="">Отсутствует в наличии</a>
                                    @endif
                                    @else
                                    <button type="button" class="btn btn-outline-primary"><a href="{{ url('/login') }}">Авторизируйтесь</a>
                                        @endif
                                        <button type="button" class="btn btn-outline-primary"><a href="{{ url('/catalog/tovar') }}/{{ $xyz->id }}">Подробнее</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endsection