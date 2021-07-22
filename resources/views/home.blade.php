@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    See students list
                    <button class="btn btn-primary"><a href="/students" style="text-decoration:none; color:white">See
                            Students</a></button>

                    <h2>Your Students</h2>

                    @if(count($students) > 0)
                    <table style="width: 675px;">
                        <tr>
                            <th>Name</th>
                            <th>Year</th>
                            <th>Department</th>
                        </tr>

                        @foreach($students as $student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->year}}</td>
                            <td>{{$student->department}}</td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <p>You have no students</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection