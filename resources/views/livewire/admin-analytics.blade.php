@extends('layouts.admin')

@section('content')
    <h1>Analytics</h1>
    <div class="analytics-cards">
        <div class="card">
            <h2>Total Users</h2>
            <p>{{ $totalUsers }}</p>
        </div>
        <div class="card">
            <h2>Total Donations</h2>
            <p>{{ $totalDonations }}</p>
        </div>
        <div class="card">
            <h2>Total Needs</h2>
            <p>{{ $totalNeeds }}</p>
        </div>
    </div>
    <div class="graph">
        <h2>Donations Graph</h2>
        <select wire:model="filter">
            <option value="week">Past Week</option>
            <option value="month">Past Month</option>
            <option value="year">Past Year</option>
        </select>
        <canvas id="donations-graph"></canvas>
    </div>
@endsection

@push('scripts')
    <script>
        // JavaScript for fetching and displaying graph data based on filter
    </script>
@endpush
