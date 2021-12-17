@extends('layouts.app')

@section('content')

   
       <p>#{{ $item->id}}</p>
       <p>Товар: {{ $item->product->product_name}}</p>
       <p>Пользователь: {{ $item->user->name}}</p>
       <p>Сумма: {{ $item->total}}</p>
       <p>Дата заказа: {{ $item->data_order}}</p>
       <p>Заказ создан: {{ $item->created_at }}</p>
       <p>Обновление: {{ $item->updated_at }}</p>
       <p>Удаление: {{ $item->deleted_at}}</p>
       <p>Комментарий: {{ $item->comment }}</p>
    
 
    {{--@foreach($productList as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->created_at }}</td>
              <td>{{ $product->category_name }}</td>
              <td>{{ $product->description }}</td>
            </tr> 
    @endforeach--}}
     
  </tbody>
   <table>  