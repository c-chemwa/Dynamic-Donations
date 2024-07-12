@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>
    
    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="save">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" wire:model="name">
            @error('name') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" wire:model="email">
            @error('email') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="phone">Phone</label>
            <input type="text" id="phone" wire:model="phone">
            @error('phone') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="address">Address</label>
            <input type="text" id="address" wire:model="address">
            @error('address') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" wire:model="dob">
            @error('dob') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" wire:model="password">
            @error('password') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" wire:model="password_confirmation">
        </div>

        <button type="submit">Save</button>
    </form>
@endsection
