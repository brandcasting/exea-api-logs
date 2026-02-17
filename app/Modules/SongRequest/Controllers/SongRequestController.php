<?php

namespace App\Modules\SongRequest\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\SongRequest\Models\SongRequestLog;
use App\Modules\SongRequest\Requests\SongRequestRequest;
use Illuminate\Http\Request;

class SongRequestController extends Controller
{
    /**
     * Guardar log de solicitud de canción
     */
    public function store(SongRequestRequest $request)
    {
        $log = SongRequestLog::create($request->validated());

        return response()->json([
            'message' => 'Solicitud de canción registrada correctamente 🎵',
            'data'    => $log
        ], 201);
    }
}
