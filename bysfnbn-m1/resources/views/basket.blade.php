@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <h1>Корзина</h1>

        <table>
            <thead>
                <tr>
                    <th>Название продукта</th>
                    <th>Цена</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart_items as $item)
                <tr>
                    <td>{{ $item->prod->name }}</td>
                    <td>{{ $item->prod->price }}</td>
                    <td><a href="{{ route('cartdelete', $item->id) }}">Удалить</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection