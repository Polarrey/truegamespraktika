@extends('layouts.app')

@section('content')

<div class="container">


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

@endsection