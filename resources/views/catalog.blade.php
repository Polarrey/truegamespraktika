@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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



        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                Фильтры
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{url('/catalog')}}">Сбросить фильтр</a></li>
            </ul>
        </div>

        <div class="btn-3">
            <a href="{{url('/catalog/1')}}">Консоли</a>
            <a href="{{url('/catalog/2')}}">Видеоигры</a>
            <a href="{{url('/catalog/3')}}">Девайсы</a>
        </div>


    





            @foreach ($product as $xyz)
            <div class="border mt-3 mb-3">
                <div class="">
                    <div class="">
                        <div class="">
                            <img src="{{ $xyz->img }}" class="d-block w-100 " alt="tovar">
                        </div>
                        <div class="">
                            <h1>{{ $xyz->name }}</h1>
                            <h1>{{ $xyz->year }}</h1>
                            <h3>{{ $xyz->price }}</h3>
                            @auth
                            <button class="btn-3">
                                <a href="{{url('/catalog/singleproduct')}}/{{$xyz->id}}">Купить</a></button>
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
