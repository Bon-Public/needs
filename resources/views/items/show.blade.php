@extends('layouts.app')@section('content')
 <h1>{{ $item->name }}</h1><div class='body'>
  <pre>{{ $item }}</pre>
 </div>
@stop