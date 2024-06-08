@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('courses.update', $course) }}" class="mt-5 w-50 shadow bg-white p-4 mx-auto rounded-4">
        @csrf
        @method('PUT')
        <h1 class="text-danger mb-3">Edit Course</h1>
            <div>
                <label class="form-label">Title</label>
                <input class="form-control" value="{{ $course->title }}" type="text" name="title" required>
            </div>
            <div class="mt-2">
                <label class="form-label">Description</label>
                <input class="form-control" value="{{ $course->description }}" type="text" name="description" required>
            </div>
            <div class="mt-2">
                <label class="form-label">Start Date</label>
                <input class="form-control" value="{{ $course->start_date }}" type="date" name="start_date" required>
            </div>
            <div class="mt-2">
                <label class="form-label">End Date</label>
                <input class="form-control" type="date" value="{{ $course->end_date }}" name="end_date"  required>
            </div>
            <div class="mt-2 text-center">
                <button type="submit" class="btn btn-primary mt-3 w-50">Update</button>
            </div>
    </form>
@endsection
