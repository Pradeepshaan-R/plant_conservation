@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Create Report</h2>

        <form action="{{ route('report.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="plant_name">Plant Name:</label>
                <input type="text" name="plant_name" id="plant_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="latitude">Latitude:</label>
                <input type="number" name="latitude" id="latitude" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="longitude">Longitude:</label>
                <input type="number" name="longitude" id="longitude" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="4"></textarea>
            </div>

            <div class="form-group my-3">
                <label for="photo">Photo:</label>
                <input type="file" name="photo" id="photo" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary">Submit Report</button>
        </form>
    </div>
@endsection
