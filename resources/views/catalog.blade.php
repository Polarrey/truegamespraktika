@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex"> <!--сортировка и фильтр-->
                <div class="btn-group mb-3 me-auto"> <!--селектор с сортировкой-->
                    <a href="{{url('/catalog/sort')}}/name/asc" class="btn btn-primary" aria-current="page">По наименованию</a>
                    <a href="{{url('/catalog/sort')}}/year/desc" class="btn btn-primary">По году</a>
                    <a href="{{url('/catalog/sort')}}/price/desc" class="btn btn-primary">По цене</a>
                </div>

                <div class="dropdown"> <!--выпадающий фильтр по категории-->
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Фильтры
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        @foreach($cat as $categotya)
                        <li>
                            <a class="dropdown-item" href="{{url('/catalog/filter')}}/{{$categotya->id}}">{{$categotya->category}}</a>
                        </li>
                        @endforeach
                        <li>
                            <a class="dropdown-item" href="{{url('/catalog')}}">По умолчанию</a>
                        </li>
                    </ul>
                </div>
            </div>

            @foreach ($prod as $pp) <!--вывод товара-->
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ $pp->img }}" class="d-block w-100 " alt="tovar"><!--вывод изображения товара с базы-->
                        </div>
                        <div class="col-7">
                            <h1>{{ $pp->name }}</h1><!--вывод имени товара с базы-->
                            <h3>{{ $pp->price }}</h3><!--вывод цены товара с базы-->
                            @auth
                            <button type="button" class="btn btn-info mb-auto">Купить</button>
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