@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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