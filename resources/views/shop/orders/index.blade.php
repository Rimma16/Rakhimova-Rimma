@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Список заказов</h1>
    <table class="table">
        <thead> 
            <tr>
                 <th>#</th>
                 <th>Дата заказа</th> 
                 <th>Сумма</th>
                 <th>Пользователь</th>
                 <th>Товар</th>
                 <th>Заказ создан</th>
                 <th>Обновление</th>
                 <th>Удаление </th>
                 <th>Комментарий</th>
                 
            </tr> 
        </thead>
        <tbody>
    @foreach($items as $item)
            <tr>
            <td>{{ $item->id}}</td>
              <td>{{ $item->data_order }}</td>
              <td>{{ $item->total }}</td>
              <td>{{ $item->user_id }}</td>
              <td>{{ $item->product_id }}</td>
              <td>{{ $item->created_at}}</td>
              <td>{{ $item->updated_at }}</td>
              <td>{{ $item->deleted_at }}</td>
              <td>{{ $item->comment }}</td>

              

            </tr> 
    @endforeach
        </tbody>
   <table>
</div>    
@endsection
