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
                @foreach($cat as $obcat)
                    <li><a class="dropdown-item" href="{{url('/catalog/filter')}}/{{$obcat->id}}">{{$obcat->name}}</a>
                    </li>
                @endforeach
                <li><a class="dropdown-item" href="{{url('/catalog')}}">сбросить фильтр</a></li>
            </ul>
        </div>




    
            @foreach ($product as $xyz)
            <div class="border mb-3">
                <div class="">
                    <div class="">
                        <div class="">
                            <img src="{{ $xyz->img }}" class="d-block w-100 " alt="tovar">
                        </div>
                        <div class="">
                            <h1>{{ $xyz->name }}</h1>
                            <h1>{{ $xyz->year }}</h1>
                            <h3>{{ $xyz->price }}</h3>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
