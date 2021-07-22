@extends('layouts.app')

@section('content')
<h1>Students</h1>

<a href="/students/create" class="btn btn-info" style="color: white;">Add Student</a>

<br><br>

@if(count($students) > 1)
<table>
    <tr>
        <th>Name</th>
        <th>Year</th>
        <th>Department</th>
        <th>Created At</th>
        <th></th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->year}}</td>
        <td>{{$student->department}}</td>
        <td>Entered on <small>{{$student->created_at}}</small></td>
        <td>
            <button class="btn btn-primary"><a href="/students/{{$student->id}}"
                    style="text-decoration:none; color:white">View</a></button>

            @if(!Auth::guest())
            <button class="btn btn-success"><a href="/students/{{$student->id}}/edit"
                    style="text-decoration:none; color:white">Update</a></button>
            {!!Form::open(['action' => ['StudentsController@destroy', $student->id], 'method' => 'POST', 'class' =>
            'float-right ml-1'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            @endif
        </td>
    </tr>
    @endforeach
</table>

@else

@endif

@endsection