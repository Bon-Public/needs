<div class='form-group'>
 {!! Form::label('name', 'Name:') !!}
 {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div><div class='form-group'>
 {!! Form::label('type', 'Type:') !!}
 {!! Form::text('type', null, ['class' => 'form-control']) !!}
 </div><div class='form-group'>
 {!! Form::label('user_id', 'User_id:') !!}
 {!! Form::text('user_id',  Auth::user()->id, ['class' => 'form-control']) !!}
 </div><div class='form-group'>
 {!! Form::label('state', 'State:') !!}
 {!! Form::text('state',  null, ['class' => 'form-control']) !!}
 </div><div class='form-group'>
 {!! Form::label('desc', 'Desc:') !!}
 {!! Form::text('desc',  null, ['class' => 'form-control']) !!}
 <div class='form-group'>
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-success form-control']) !!}
</div>