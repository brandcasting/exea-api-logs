<?php

namespace App\Modules\Liked\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LikedRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Cambia esto si necesitas auth
    }

    public function rules(): array
    {
        return [
            // User info
            'username' => ['required', 'string', 'max:255'],
            'email'    => ['required', 'email', 'max:255'],
            'phone'    => ['nullable', 'string', 'max:30'],

            // POS info
            'pos_id' => ['required', 'integer'],
            'pos'    => ['required', 'string', 'max:255'],

            // Client info
            'client_id' => ['required', 'integer'],
            'client'    => ['required', 'string', 'max:255'],

            // Status / Feedback
            'status' => ['required', 'boolean'],
            'value'  => ['required', 'string', 'max:255'],

            // Song info
            'title'  => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],

            // Rule info
            'name_rule' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'username.required' => 'El nombre de usuario es obligatorio.',
            'email.required'    => 'El email es obligatorio.',
            'email.email'       => 'El email debe ser válido.',
            'pos_id.required'   => 'El POS ID es obligatorio.',
            'client_id.required'=> 'El Client ID es obligatorio.',
            'status.boolean'    => 'El status debe ser true o false.',
            'title.required'    => 'El título de la canción es obligatorio.',
        ];
    }
}
