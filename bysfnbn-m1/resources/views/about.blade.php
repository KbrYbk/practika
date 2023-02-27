@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row">
                    <div class="col">
                        <img src="/public/img/logo.png" alt="" class="card-img-top">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h1 class="card-title">
                                Для тех кто привык побеждать!!!
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($prod as $pp)
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{  $pp-> $img  }}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection