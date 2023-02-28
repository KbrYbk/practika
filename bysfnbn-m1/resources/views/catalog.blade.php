@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="dropdown mb-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Сортировка
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{url('/catalog/sort')}}/name/asc">По наименованию</a>
                    <a class="dropdown-item" href="{{url('/catalog/sort')}}/year/asc">По году</a>
                    <a class="dropdown-item" href="{{url('/catalog/sort')}}/price/asc">По цене</a>
                </div>
            </div>
            @foreach ($prod as $pp)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ $pp->img }}" class="d-block w-100 " alt="tovar">
                        </div>
                        <div class="col-7">
                            <h1>{{ $pp->name }}</h1>
                            <h3>{{ $pp->price }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection