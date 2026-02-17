<?php

namespace App\Modules\SongRequest\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequestRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username'     => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone'        => 'required|string|max:30',

            'song_name'    => 'required|string|max:255',
            'album'        => 'nullable|string|max:255',
            'genre'        => 'nullable|string|max:255',
            'playlist'     => 'nullable|string|max:255',

            'request_time' => 'required|date_format:H:i',
        ];
    }
}
