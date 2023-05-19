@extends("layouts.bootstraplayout")

@section("body")
<h2 class="display-6 my-4 text-center">Student Details</h2>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-sm-12 col-md-10">
            <table class="table table-striped">
                <tr>
                    <th>ID:</th>
                    <td>{{ $student->id }}</td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td>{{ $student->name }}</td>
                </tr>
                <tr>
                    <th>Grade:</th>
                    <td>{{ $student->grade }}</td>
                </tr>
                <tr>
                    <th>Department:</th>
                    <td>{{ $student->department }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@endsection