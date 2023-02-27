@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link">По цене</a></li>
                <li class="nav-item"><a href="" class="nav-link">По новизне</a></li>
            </ul>
            @foreach ($prod as $pp)
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <div class="card-header">
                                <img src="{{ $pp->img }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h1 class="mx-5">{{ $pp->name }}</h1>
                                <br>
                                <p> {{ $pp->price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
