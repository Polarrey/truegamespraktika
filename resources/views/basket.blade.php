@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <h1>Корзина</h1>

            <div class="row row-cols-2">
                @foreach ($cart_items as $item)
                    <!--вывод товара-->
                    <div class="col mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h1>{{ $item->prod->name }}</h1>
                                        <!--вывод имени товара с базы-->
                                        <h3>{{ $item->prod->price }} &#8381</h3>
                                        <!--вывод цены товара с базы-->
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('cartdelete', $item->id) }}">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
