@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-3">Админ панель</h1>
    <h4 class="text-center">Редактирование товара</h4>
    <a class="btn btn-info mb-3" href="{{url('/admin/product')}}" role="button">Добавить товар</a><!--Кнопка на создание товара-->
    <div class="row row-cols-2">
        @foreach ($prod as $pp) <!--вывод товара-->
        <div class="col mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{url('/img/tovary')}}/{{ $pp->img }}" class="d-block w-100 " alt="tovar"><!--вывод изображения товара с базы-->
                        </div>
                        <div class="col-4">
                            <h1>{{ $pp->name }}</h1><!--вывод имени товара с базы-->
                            <h3>{{ $pp->price }} &#8381</h3><!--вывод цены товара с базы-->
                            <div class="">
                                <a role="button" href="{{url('/admin/product/delete/')}}/{{$pp->id}}" class="btn btn-danger mx-1 mt-2">Удалить</a> <!--удалить товар-->
                            </div>
                        </div>
                        <div class="col-4">
                            <h5>Страна: {{ $pp->country }}</h5><!--вывод страны-производителя товара с базы-->
                            <h5>Год: {{ $pp->year }}</h5><!--вывод года выпуска товара с базы-->
                            <h5>Модель: {{ $pp->model }}</h5><!--вывод модель товара с базы-->
                            <h5>Количество: {{ $pp->count }}</h5><!--вывод модель товара с базы-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <h4 class="text-center">Редактирование категории</h4>
    <a class="btn btn-info mb-3" href="{{url('/admin/category')}}" role="button">Добавить категорию</a><!--Кнопка на добавление категории-->
    <div class="row row-cols-2">
        @foreach ($cat as $pp) <!--вывод категорий-->
        <div class="col mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h1>{{ $pp->name }}</h1><!--вывод имени товара с базы-->

                            <a role="button" href="{{url('/admin/category/delete/')}}/{{$pp->id}}" class="btn btn-danger mx-1 mt-2">Удалить</a> <!--удалить товар-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection