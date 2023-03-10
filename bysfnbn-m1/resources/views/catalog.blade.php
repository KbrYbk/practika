@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex">
                    <!--сортировка и фильтр-->
                    <div class="d-flex mb-3 me-auto">
                        <!--селектор с сортировкой-->
                        {{-- <a href="{{ url('/catalog/sort') }}/name/asc" class="btn btn-primary" aria-current="page">По
                            наименованию</a>
                        <a href="{{ url('/catalog/sort') }}/year/desc" class="btn btn-primary">По году</a> --}}
                        <div class="dropdown mx-1">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                По году
                            </button>
                            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a href="{{ url('/catalog/sort') }}/year/desc" class="dropdown-item">По году ↓</a>
                                </li>
                                <li>
                                    <a href="{{ url('/catalog/sort') }}/year/asc" class="dropdown-item">По году ↑</a>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown mx-1">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                По наименованию
                            </button>
                            <ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <li>
                                    <a href="{{ url('/catalog/sort') }}/name/desc" class="dropdown-item">По наименованию ↓</a>
                                </li>
                                <li>
                                    <a href="{{ url('/catalog/sort') }}/name/asc" class="dropdown-item">По наименованию ↑</a>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown mx-1">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton3"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                По цене &#8381
                            </button>
                            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownMenuButton3">
                                <li>
                                    <a href="{{ url('/catalog/sort') }}/price/desc" class="dropdown-item">По цене ↓</a>
                                </li>
                                <li>
                                    <a href="{{ url('/catalog/sort') }}/price/asc" class="dropdown-item">По цене ↑</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mx-3">
                        <!--сброс сортировки и фильтра-->
                        <a class="btn btn-light" href="{{ url('/catalog') }}" role="button">По умолчанию</a>
                    </div>
                    <div class="dropdown">
                        <!--выпадающий фильтр по категории-->
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton4"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Категории
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton4">
                            @foreach ($cat as $categorya)
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ url('/catalog/filter') }}/{{ $categorya->id }}">{{ $categorya->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                @foreach ($prod as $pp)
                    <!--вывод товара-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ url('/img/tovary') }}/{{ $pp->img }}" class="d-block w-100 "
                                        alt="tovar">
                                    <!--вывод изображения товара с базы-->
                                </div>
                                <div class="col-7">
                                    <h1>{{ $pp->name }}</h1>
                                    <!--вывод имени товара с базы-->
                                    <h3>{{ $pp->price }} &#8381</h3>
                                    <!--вывод цены товара с базы-->
                                    <a href="{{ url('/catalog/tovar') }}/{{ $pp->id }}"
                                        class="btn btn-info">Подробнее</a>
                                    @if (auth()->check())
                                        @if ($pp->count > 0)
                                            <a href="{{ Route('cartmake', $pp->id) }}" class="btn btn-success">Добавить
                                                в корзину</a>
                                        @else
                                            <a class="btn btn-primary disabled" href="">НЕТ В НАЛИЧИИ</a>
                                        @endif
                                    @else
                                        <a href="{{ url('/login') }}"class="btn btn-info">Авторизируйтесь</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
