@extends('layouts.app')

@section('content')
<div class="container">
    <h1> {{ $item->product_name}} </h1>
                <p> категория: {{ $item->category->category_name}}</p>
                <p> название товара: {{ $item->product_name}}</p>
                <p> цена: {{ $item->price}} рублей </p>
                <p> виды товара: {{ $item->description}} </p>
                <p>{{ $item->created_ad}}</p>
                <p>{{ $item->updated_at}}</p>
                <p>{{ $item->deleted_at}}</p>
</div>
@endsection
