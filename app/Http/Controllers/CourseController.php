<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(CourseRequest $request)
    {

        Course::createCousre($request->validated());

        return redirect('courses')->with('success', 'Course created successfully.');
    }

    public function show($id)
    {
        $course=Course::find($id);
        return view('courses.show',compact('course'));
    }

    public function edit($id)
    {
        $course=Course::find($id);
        return view('courses.edit', compact('course'));
    }

    public function update(CourseRequest $request, $id)
    {
        $course=Course::find($id)->update($request->validated());
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
