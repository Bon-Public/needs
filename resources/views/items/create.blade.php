@extends('layouts.app')@section('content')<div class='col-md-6 col-md-offset-3'>
  <h1>Add New Item</h1><hr>
  
  {!! Form::open(['action' => 'ItemController@store']) !!}
   @include('items.form', ['submitButtonText' => 'Add Item'])
  {!! Form::close() !!}
 </div>
@stop