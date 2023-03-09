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
<<<<<<< HEAD
                    <td>{{ $item->prod->name }}</td>
                    <td>{{ $item->prod->price }}</td>
                    <td><a href="{{ route('cartdelete', $item->id) }}">Удалить</a></td>
=======
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td><a href="{{ route('cartdelete', $item->cart_id) }}">Удалить</a></td>
>>>>>>> 3c259c04aaa426ebd4405d1b71afaadd462e6534
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection