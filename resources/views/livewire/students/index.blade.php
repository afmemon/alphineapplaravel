@extends('layouts.bootstraplayout')

@section('body')
    <div>
        <h2 class="display-6 my-4 text-center">Students</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('message'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <a class="btn btn-success" href="{{ route('students.create') }}">Add Student</a>
                    <a class="btn btn-warning" href="{{ route('employeessales') }}">Click here to see valueable employee</a>
                </div>

                <div class="col-md-1"></div>
                <div class="col-sm-12 col-md-10">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Grade</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->grade }}</td>
                                    <td>{{ $student->department }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('students.show', $student) }}">View</a> |
                                        <a class="btn btn-info" href="{{ route('students.edit', $student) }}">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
@endsection
