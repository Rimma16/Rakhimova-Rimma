@extends('layouts.app')

@section('content')
<table>
<div class="container">
    <h1>Список товаров</h1>
    <table class="table">
        <thead>
            <tr>
                 <th>#</th> 
                 <th>Категория</th>
                 <th>Название товара</th>
                 <th>Цена</th>
                 <th>Описание товара</th>
                 <th>Активный</th>
                 <th>Создать</th>
                 <th>Обновить</th>
                 <th>Удалить</th>

            </tr>
        </thead>
        <tbode>
        @foreach($items as $item)
            <tr>
                
                <td>{{ $item->id }}</td>
                <td>{{ $item->category_id}}</td>
                <td> <a href="{{route('products.show', $item->id)}}">{{$item->product_name}} </a> </td>
                <td>{{ $item->price}}</td>
                <td>{{ $item->description}}</td>
                <td>{{ $item->is_active}}</td>
                <td>{{ $item->created_ad}}</td>
                <td>{{ $item->updated_at}}</td>
                <td>{{ $item->deleted_at}}</td> 
               
            </tr> 
        @endforeach
    </table>
</div>
@endsection
