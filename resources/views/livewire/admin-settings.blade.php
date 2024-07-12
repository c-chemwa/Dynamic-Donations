@extends('layouts.admin')

@section('content')
    <h1>Settings</h1>
    <form wire:submit.prevent="updateTheme">
        <label for="theme">Theme</label>
        <select id="theme" wire:model="theme">
            <option value="light">Light</option>
            <option value="dark">Dark</option>
        </select>
        <button type="submit">Update Theme</button>
    </form>
@endsection
