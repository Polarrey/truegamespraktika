@extends('layouts.app')

@section('content')

<div class="container">
        <div>
            <h1>
                Мы находимся по адресу: г. Омск, улица Пушкина 73, офис 202
            </h1>
            <img class="w-50" src="\public\img\map.jpg" alt="">
        </div>
        <br>
        <div class="text">
            <ul>
                <li><a href="tel:79136012801" class="tel">Позвонить нам +79136012801</a></li>
                <li><a href="mailto:truegames@mail.com" class="email">Написать нам</a></li>
            </ul>
        </div>

</div>

@endsection