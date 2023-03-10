@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-mb-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="d-flex justify-content-center">Создание товара</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('makeprod')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Название товара</label>

                            <div class="col-md-6">
                                <input class="form-control" id="name" type="text" name="name" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="img" class="col-md-4 col-form-label text-md-end">Добавить фото товара</label>

                            <div class="col-md-6">
                                <input class="form-control" id="img" type="file" name="img" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Цена</label>

                            <div class="col-md-6">
                                <input class="form-control" id="price" type="number" name="price" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="year" class="col-md-4 col-form-label text-md-end">Дата выхода продукта</label>

                            <div class="col-md-6">
                                <input class="form-control" id="year" type="text" name="year" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-end">Страна производитель</label>

                            <div class="col-md-6">
                                <input class="form-control" id="country" type="text" name="country" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="category" class="col-md-4 col-form-label text-md-end">Категория</label>

                            <div class="col-md-6">
                                <select class="form-select" name="category" id="category">
                                    @foreach($cat as $categorya)
                                    <option value="{{$categorya->id}}">{{$categorya->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="model" class="col-md-4 col-form-label text-md-end">Модель</label>

                            <div class="col-md-6">
                                <input class="form-control" id="model" type="text" name="model" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="count" class="col-md-4 col-form-label text-md-end">Количество</label>

                            <div class="col-md-6">
                                <input class="form-control" id="count" type="text" name="count" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Создать товар') }}
                                </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection