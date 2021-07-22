@extends('layouts.app')

@section('content')
<h1>Update Student</h1>

{!! Form::open(['action' => ['StudentsController@update', $student->id], 'method' => 'POST', 'enctype' =>
'multipart/form-data']) !!}

<div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', $student->name, ['class' => 'form-control', 'placeholder' => 'Name', ])}}
</div>

<div class="form-group">
    {{Form::label('year', 'Year')}}
    {{Form::text('year', $student->year, ['class' => 'form-control', 'placeholder' => 'Year', ])}}
</div>

<div class="form-group">
    {{Form::label('department', 'Department')}}
    {{Form::text('department', $student->department, ['class' => 'form-control', 'placeholder' => 'Department',  ])}}
</div>

<div class="form-group">
    {{Form::file('image')}}
</div>

{{Form::hidden('_method', 'PUT')}}

{{Form::submit('Add', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection