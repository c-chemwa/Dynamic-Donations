@extends('layouts.admin')

@section('content')
    <h1>Needs</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Amount Needed</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($needs as $need)
                <tr>
                    <td>{{ $need->id }}</td>
                    <td>{{ $need->title }}</td>
                    <td>{{ $need->description }}</td>
                    <td>{{ $need->amount_needed }}</td>
                    <td>{{ $need->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
