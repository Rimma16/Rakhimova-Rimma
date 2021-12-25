@extends('layouts.app')

@section('content')

<div class="container">
   
       <p>#{{ $item->id}}</p>
       <h1>Товар: {{ $item->product->product_name}} </h1>
       <h1>Пользователь: {{ $item->user->name}}</h1>
       <h1>Сумма: {{ $item->total}} rub</h1>
       <p><strong>Дата заказа: {{ $item->data_order}}</strong></p>
       <p><strong>Заказ создан: {{ $item->created_at }}</strong></p>
       <p><strong>Обновление: {{ $item->updated_at }}</strong></p>
       <p><strong>Удаление: {{ $item->deleted_at}}</strong></p>
       <p><strong>Комментарий: {{ $item->comment }}</strong></p>
    
 <div>
   
     
  