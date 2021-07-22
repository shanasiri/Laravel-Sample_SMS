@extends('layouts.app')

@section('content')
<div class="dp">
    <img src="/storage/image/{{$student->image}}" style="width: 100px;">
</div>

<br>
<h3>Name: {{$student->name}}</h3>

<h3>Year: {{$student->year}}</h3>

<h3>Department: {{$student->department}}</h3>

<hr>

<h6>Entered on <small>{{$student->created_at}}</small></h6>

<a href="/students" class="btn btn-secondary">Go Back</a>
@endsection