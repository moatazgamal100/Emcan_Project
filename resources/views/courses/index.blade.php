@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class=" text-danger">Courses</h1>

            <a href="{{ route('courses.create') }}" class="btn btn-primary">Create Course</a>
        </div>
    </div>

    <ol class="mt-5 w-50 bg-white shadow p-5 rounded-5 mx-auto">
        <li class="mt-3 d-flex justify-content-between border-bottom">
            <h4>Title</h4>
            <div>
                <h4 class="text-danger me-5">Actions</h4>
            </div>
        </li>
        @foreach($courses as $course)
            <li class="mt-3 d-flex justify-content-between">
                <a href="{{ route('courses.show', $course) }}" class="text-decoration-none text-dark h5">{{ $course->title }}</a>
                <div>
                    <a href="{{ route('courses.edit', $course) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ol>
@endsection
