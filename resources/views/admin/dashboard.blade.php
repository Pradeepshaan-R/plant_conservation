@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Admin Dashboard</h1>

        {{-- FILTER --}}
        <form action="{{ route('admin.dashboard') }}" method="GET" class="mb-4">
            <div class="row">
                <div class="form-group col">
                    <label for="latitude">Latitude:</label>
                    <input type="number" name="latitude" id="latitude" value="{{ request('latitude') }}"
                        class="form-control" step="any">
                </div>

                <div class="form-group col">
                    <label for="longitude">Longitude:</label>
                    <input type="number" name="longitude" id="longitude" value="{{ request('longitude') }}"
                        class="form-control" step="any">
                </div>

                <div class="form-group col">
                    <label for="radius">Radius (km):</label>
                    <input type="number" name="radius" id="radius" value="{{ request('radius') }}" class="form-control"
                        step="any">
                </div>

                <div class="form-group col" style="margin-top: 20px">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        {{-- LIST --}}
        <h2>Reports</h2>
        <ul class="list-group">
            @forelse ($reports as $report)
                <li class="list-group-item">
                    <strong>{{ $report->plant_name }}</strong> - by {{ $report->user->name }} -
                    {{ $report->created_at->format('d M Y H:i') }}<br>
                    <small>Coordinates: {{ $report->latitude }}, {{ $report->longitude }}</small>
                </li>
            @empty
                <li class="list-group-item">No reports found.</li>
            @endforelse
        </ul>
    </div>
@endsection
