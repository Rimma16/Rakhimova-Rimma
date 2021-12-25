@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Категории товаров</h1>
    <table class="table">
        <thead> 
            <tr>
                 <th>#</th>
                 <th>Название товара</th>
                 <th>Описание</th>

            </tr> 
        </thead>
        <tbody>
    @foreach($items as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->category_name }}</td>
              <td>{{ $item->description }}</td>
            </tr> 
    @endforeach
        </tbody>
   <table>
</div>    
@endsection
