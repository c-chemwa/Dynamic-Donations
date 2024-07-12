@extends('layouts.admin')

@section('content')
    <h1>Notifications</h1>
    <ul>
        @foreach($notifications as $notification)
            <li>{{ $notification->message }}
                <button wire:click="approve({{ $notification->id }})">Approve</button>
            </li>
        @endforeach
    </ul>
@endsection
