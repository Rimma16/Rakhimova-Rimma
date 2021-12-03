@extends('layouts.app')

@section('content')
   
       <p>{{ $item->id}}</p>
       <p>{{ $item->title}}</p>
       <p>{{ $item->created_at }}</p>
       <p>{{ $item->category_name }}</p>
       <p>{{ $item->description }}</p>
    
 <table class="table">
        <thead> 
            <tr>
                 <th>#</th>
                 <th>Дата создания</th> 
                 <th>Название товара</th>
                 <th>Описание</th>
            </tr> 
        </thead>
        <tbody>
    @foreach($productList as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->created_at }}</td>
              <td>{{ $product->category_name }}</td>
              <td>{{ $product->description }}</td>
            </tr> 
    @endforeach
        </tbody>
   <table>      