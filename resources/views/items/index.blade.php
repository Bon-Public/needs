@extends('layouts.app')@section('content')
 <h1>items</h1>
 <div>
  @forelse($items as $item)
   <h2>
    <a href="{{ url('/items', $item->id) }}">
     {{ $item->name }}
    </a>
   </h2>
   <a href="item/{{ $item->id}}/edit">
    Edit item
   </a>
   <div class='body'>
    <pre>{{ $item }}</pre>
   </div>
   
  @empty
   <p>There are no items to display!</p>
  @endforelse
 </div>
@stop