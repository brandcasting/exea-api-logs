<?php

namespace App\Modules\Courses\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Courses\Models\Course;
use App\Modules\Courses\Requests\StoreCourseRequest;
use App\Modules\Courses\Services\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct(
        protected CourseService $service
    ) {}

    public function index(Request $request) {
        $courses = $this->service->list($request);

        return view('pages.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('pages.courses.create');
    }

    public function store(StoreCourseRequest $request)
    {
        $this->service->create($request->validated());

        return redirect()
            ->route('courses.create')
            ->with('success', 'Curso creado correctamente');
    }
}
