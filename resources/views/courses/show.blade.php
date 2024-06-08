@extends('layouts.app')

@section('content')
    <div class="container bg-white shadow p-5 rounded-4 w-50">
        <div class="d-flex align-items-center">
            <h1 class="me-3 text-primary">Course Title : </h1>
            <h2 >{{ $course->title }}</h2>
        </div>
        <div class="d-flex align-items-center">
            <h1 class="me-3 text-primary">Course Description : </h1>
            <h2 >{{ $course->description }}</h2>
        </div>
        <div class="d-flex align-items-center">
            <h1 class="me-3 text-primary">Course Start Date : </h1>
            <h2 >{{ $course->start_date }}</h2>
        </div>
        <div class="d-flex align-items-center">
            <h1 class="me-3 text-primary">Course End Date : </h1>
            <h2 >{{ $course->end_date }}</h2>
        </div>
        <div class="d-flex align-items-center">
            <form method="POST" class="w-50 me-2" action="{{ route('courses.destroy', $course) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn w-100 btn-danger ">Delete</button>
            </form>
            <a href="{{ route('courses.index') }}" class="btn w-50 btn-primary">Back</a>
        </div>
    </div>
@endsection
