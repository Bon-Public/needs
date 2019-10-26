@extends('layouts.app')@section('content')<div class='col-md-6 col-md-offset-3'>
  <h1>Edit item</h1><hr>
  
  {!! Form::model($item, ['method' => 'PATCH', 'action' => ['ItemController@update',$item->id]]) !!}
   @include('items.form', ['submitButtonText' => 'Edit item'])
  {!! Form::close() !!}
 </div>
@stop