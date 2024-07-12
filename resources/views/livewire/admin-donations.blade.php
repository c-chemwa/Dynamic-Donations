@extends('layouts.admin')

@section('content')
    <h1>All Donations</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Item Donated</th>
                <th>Date</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donations as $donation)
                <tr>
                    <td>{{ $donation->id }}</td>
                    <td>{{ $donation->user_id }}</td>
                    <td>{{ $donation->item }}</td>
                    <td>{{ $donation->date }}</td>
                    <td>{{ $donation->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
