@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-3">Админ панель</h1>
    <h4 class="text-center">Редактирование товара</h4>
    <a class="btn btn-info mb-3" href="{{url('/admin/product/create')}}" role="button">Опубликовать товар</a>
    <div class="row row-cols-2">
        @foreach ($prod as $pp) <!--вывод товара-->
        <div class="col mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{url('/img/tovary')}}/{{ $pp->img }}" class="d-block w-100 " alt="tovar"><!--вывод изображения товара с базы-->
                        </div>
                        <div class="col-7">
                            <h1>{{ $pp->name }}</h1><!--вывод имени товара с базы-->
                            <h3>{{ $pp->price }} &#8381</h3><!--вывод цены товара с базы-->
                            
                            <a role="button" class="btn btn-warning mb-auto">Редактирование</a>
                            <a role="button" href="{{url('/admin/product/delete/')}}/{{$pp->id}}" class="btn btn-danger mb-auto">Удалить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection