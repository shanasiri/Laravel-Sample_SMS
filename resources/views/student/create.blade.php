@extends('layouts.app')

@section('content')
<h1>Create Student</h1>

{!! Form::open(['action' => 'StudentsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name', 'required'])}}
</div>

<div class="form-group">
    {{Form::label('year', 'Year')}}
    {{Form::text('year', '', ['class' => 'form-control', 'placeholder' => 'Year',  'required'])}}
</div>

<div class="form-group">
    {{Form::label('department', 'Department')}}
    {{Form::text('department', '', ['class' => 'form-control', 'placeholder' => 'Department',  'required'])}}
</div>

<div class="form-group">
    {{Form::file('image')}}
</div>

{{Form::submit('Add', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection