<?php

namespace App\Modules\Courses\Services;

use App\Modules\Courses\Models\Course;
use Illuminate\Http\Request;

class CourseService
{
    public function list(Request $request)
    {
        return Course::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%');
            })
            ->when($request->filled('level'), function ($query) use ($request) {
                $query->where('level', $request->level);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(5)
            ->withQueryString(); // mantiene filtros al paginar
    }

    public function create(array $data): Course
    {
        return Course::create($data);
    }
}
