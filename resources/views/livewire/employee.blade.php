@extends('layouts.bootstraplayout')

@section('body')
    <div class="container border mt-5 shadow">
        <h1 class="display-6 my-5">Employee Name Who Made Valueable Sale</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $result['employee'] }}</td>
                    <td>{{ $result['customer'] }}</td>
                    <td>{{ $result['order_total'] }}</td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection
