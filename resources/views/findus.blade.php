@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1>Мы находимся по адресу: г. Омск, улица Пушкина 73, офис 202</h1>
            <img class="img-fluid rounded" src="\public\img\map.jpg" alt="карта">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 mx-auto text-center">
            <ul class="list-unstyled">
                <li><a href="tel:79136012801" class="btn btn-primary">Позвонить нам +79136012801</a></li>
                <li><a href="mailto:truegames@mail.com" class="mt-1 btn btn-secondary">Написать нам</a></li>
            </ul>
        </div>
    </div>
</div>

@endsection