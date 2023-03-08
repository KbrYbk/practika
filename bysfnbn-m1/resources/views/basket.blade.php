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
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td><a href="{{ route('cartdelete', $item->cart_id) }}">Удалить</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection