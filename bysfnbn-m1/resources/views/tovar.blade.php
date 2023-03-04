@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            @foreach ($prod as $pp)

            <img src="{{ $pp->img }}" class="d-block w-100 " alt="tovar"><!--вывод изображения товара с базы-->

            <div class="col-7">
                <h1>{{ $pp->name }}</h1><!--вывод имени товара с базы-->
                <h3>{{ $pp->price }}</h3><!--вывод цены товара с базы-->
                @auth
                <button type="button" class="btn btn-info mb-auto">Купить</button>
                @endauth
            </div>

            @endforeach
        </div>
        <div class="col-md-5">

        </div>
    </div>
</div>
@endsection