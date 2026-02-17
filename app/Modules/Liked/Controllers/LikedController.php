<?php

namespace App\Modules\Liked\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Liked\Models\LikedLog;
use App\Modules\Liked\Requests\LikedRequest;

class LikedController extends Controller
{
    public function store(LikedRequest $request)
    {
        $log = LikedLog::create($request->validated());

        return response()->json([
            'message' => 'Solicitud de liked registrada correctamente 🎵',
            'data'    => $log
        ], 201);
    }
}
