<?php

namespace App\Modules\StatusPos\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusPosRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'pos' => ['nullable', 'integer'],
            'status' => ['required', 'boolean'],
            'socket_id' => ['nullable', 'string', 'max:255'],
            'start_date' => ['nullable', 'date'],
            'end_date' => ['nullable', 'date', 'after_or_equal:start_date'],
            'client_pos' => ['nullable', 'integer'],
            'label' => ['nullable', 'string', 'max:255'],
        ];
    }
}
