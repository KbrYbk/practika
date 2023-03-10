@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-5">
                    @foreach ($prod as $pp)
                    <img src="{{ url('/img/tovary') }}/{{ $pp->img }}" class="d-block w-100 " alt="tovar">
                    <!--вывод изображения товара с базы-->
                    @endforeach
                </div>
                <div class="col-md-5">
                    @foreach ($prod as $pp)
                    <div class="row">
                        <div class="col">
                            <h1>{{ $pp->name }}</h1>
                            <!--вывод имени товара с базы-->
                            <h2>{{ $pp->price }} &#8381</h2>
                            <!--вывод цены товара с базы-->
                        </div>
                        <div class="col">
                            <ul class="list-group">
                                <li>
                                    <h3>Страна: {{ $pp->country }}</h3>
                                    <!--вывод страны-производителя товара с базы-->
                                </li>
                                <li>
                                    <h3>Год: {{ $pp->year }}</h3>
                                    <!--вывод года выпуска товара с базы-->
                                </li>
                                <li>
                                    <h3>Модель: {{ $pp->model }}</h3>
                                    <!--вывод модель товара с базы-->
                                </li>
                            </ul>



                            @auth
                            <a class="btn btn-success" href="{{ url('/cart/make') }}/{{ $pp->id }}" role="button">В
                                корзину</a>

                            @endauth
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection