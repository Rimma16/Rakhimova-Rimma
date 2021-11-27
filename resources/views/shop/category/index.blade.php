@extends('layouts.app')

@section('content')
Test
<table>
    @foreach($items as $item)
          <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->category_name }}</td>
         </tr> 
    @endforeach
</table>
@endsection
