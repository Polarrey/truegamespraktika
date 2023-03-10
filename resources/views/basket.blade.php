@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <h1>Корзина</h1>
        <div class="album py-5 bg-light">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($cart_items as $item)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="/public/img/{{$item->prod-> img}}" class="carding-img d-block w-100 " alt="tovar">
                        <div class="card-body">
                            <h1>{{ $item->prod->name }}</h1>
                            <h3>{{ $item->prod->price }} &#8381</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
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
</div>
@endsection