@extends('layouts.app')

@section('content')

<section class="cart">
    <div class="container">
        @if (Auth::user())
        <h2 class="title">
            Корзина
        </h2>
        <?php $sum = 0; ?>
        <div class="cart-block">
            <div class="cart-items col-12 col-md-9 gap-3 order-md-1 order-0">
                @foreach ($products as $prod)

                <div class="cart-item card col-12">
                    <div class="cart-pic-box">
                        <img src="/public/img/{{$prod -> photo}}" alt="" class="img-fliud">
                    </div>
                    <div class="text-box">
                        <p class="card-title">{{$prod -> title}}</p>
                        <div class="count-box">
                            <a href="/public/cartrem/{{$prod -> id}}" class="add-rem">-</a>
                            <p class="text count">{{$prod -> count}} шт</p>
                            <a href="/public/cartadd/{{$prod -> id}}" class="add-rem">+</a>
                        </div>
                        <p class="text price">{{$prod -> price * $prod -> count}} руб.</p>
                    </div>
                    <a href="/public/cartall/{{$prod -> id}}" class="btn main-btn">Удалить</a>
                </div>
                <?php $sum += $prod -> price * $prod -> count; ?>
                @endforeach
            </div>
            <div class="total-cost col-12 col-md-3 order-1 order-md-0">
                <div class="total">
                    <h2>Итого:</h2>
                    <p class="text price">{{$sum}}</p>
                </div>
            </div>
        </div>
        @else
        <h1>Для того чтобы купить товар, нужно авторизоваться.
            <br>
            <a href="{{ route('login') }}">Войти</a>
            <br>
            <a href="{{ route('register') }}">Зарегистрироваться</a>
        </h1>
        @endif

    </div>
</section>

@endsection
