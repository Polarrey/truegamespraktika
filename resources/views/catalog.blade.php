@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex">
                    <!--сортировка и фильтр-->
                    <div class="d-flex mb-3 me-auto">
                        <!--селектор с сортировкой-->
                        <div class="dropdown mb-3">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Сортировка
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{url('/catalog/sort')}}/name/asc">По наименованию</a>
                    <a class="dropdown-item" href="{{url('/catalog/sort')}}/year/asc">По году</a>
                    <a class="dropdown-item" href="{{url('/catalog/sort')}}/price/asc">По цене</a>
                </div>
            </div>
                    <div class="mx-3">
                        <!--Сброс по умолчанию-->
                        <a class="btn btn-light" href="{{ url('/catalog') }}" role="button">По умолчанию</a>
                    </div>
                        <!--Список доступных категорий-->
                        <ul >
                            @foreach ($cat as $categorya)
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ url('/catalog/filter') }}/{{ $categorya->id }}">{{ $categorya->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>






                </div>
                @foreach ($product as $xyz)
                    <!--вывод товара-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ url('/img/tovary') }}/{{ $xyz->img }}" class="d-block w-100 "
                                        alt="tovar">
                                    <!--вывод изображения товара с базы-->
                                </div>
                                <div class="col-7">
                                    <h1>{{ $xyz->name }}</h1>
                                    <h3>{{ $xyz->price }} &#8381</h3>
                                    <a href="{{ url('/catalog/tovar') }}/{{ $xyz->id }}"
                                        class="btn btn-info">Подробнее</a>
                                    @if (auth()->check())
                                        @if ($xyz->count > 0)
                                            <a href="{{ Route('cartmake', $xyz->id) }}" class="btn btn-success">Добавить
                                                в корзину</a>
                                        @else
                                            <a class="btn btn-primary disabled" href="">НЕТ В НАЛИЧИИ</a>
                                        @endif
                                    @else
                                        <a href="{{ url('/login') }}"class="btn btn-info">Авторизируйтесь</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
