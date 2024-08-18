@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <h1 class="mb-4 col-10">Dashboard</h1>
            <a href="{{ route('report.create') }}" class="btn btn-primary mb-4 col-2">Create Report</a>
        </div>

        <h2>Reports</h2>
        <ul class="list-group">
            @forelse ($reports as $report)
                <li class="list-group-item">
                    <strong>{{ $report->plant_name }}</strong> - {{ $report->created_at->format('d M Y H:i') }}
                </li>
            @empty
                <li class="list-group-item">No reports found.</li>
            @endforelse
        </ul>
    </div>
@endsection
