@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <!-- карточка с лого и девизом-->
        <div class="card-body">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-3">
                    <img src="{{url('/img')}}/logo.png" class="w-100" alt="logo"> <!-- лого -->
                </div>
                <div class="col-sm-7 mx-5">
                    <h1 class="fw-bold">ДЛЯ ТЕХ, КТО
                        <!-- девиз -->
                        ПРИВЫК ПОБЕЖДАТЬ
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center my-3">
        <h1 class="text-light">Новинки компании</h1>
    </div>

    <div id="carouselExampleControls" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($prod as $pp)
            @if ($loop->first)
            <div class="carousel-item active">
                @else
                <div class="carousel-item">
                    @endif
                    <img src="{{url('/img/tovary')}}/{{ $pp->img }}" class="d-block mx-auto carousel-img w-100" alt="tovar">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="name_tovar">{{ $pp->name }}</h1>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    @endsection