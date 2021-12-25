@extends('layouts.app')

@section('content')
<div class="container">
      <h2>{{ $item->category_name }}</h2>
       <h3>{{ $item->description }}</h3>
    
      <table class="table">
        <thead> 
            <tr>
                 <th>#</th>
                 <th>Название товара</th>
                 <th>Описание</th>
                 <th>Цена</th>
            </tr> 
        </thead>
        <tbody>
    @foreach($productList as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->category_name }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->price }} rub</td>
            </tr> 
    @endforeach
        </tbody>
     <table>  
</div>           