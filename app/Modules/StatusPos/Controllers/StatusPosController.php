<?php

namespace App\Modules\StatusPos\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\StatusPos\Models\StatusPos;
use App\Modules\StatusPos\Requests\StatusPosRequest;
use Carbon\Carbon;

class StatusPosController extends Controller
{
    public function create(StatusPosRequest $request)
    {
        $data = $request->validated();
        $data['start_date'] = Carbon::parse($data['start_date'])->format('Y-m-d H:i:s');
        $data['end_date'] = Carbon::parse($data['end_date'])->format('Y-m-d H:i:s');
        $log = StatusPos::create($data);

        return response()->json([
            'message' => 'Solicitud de canción registrada correctamente 🎵',
            'data'    => $log
        ], 201);
    }
}
