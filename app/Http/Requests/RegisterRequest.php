<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama'     => ['required', 'string', 'max:150'],
            'email'    => ['required', 'email', 'unique:pengguna,email'],
            'no_hp'    => ['required', 'string', 'max:15'],
            'password' => [
                'required',
                'string',
                'confirmed',
                Password::min(8)
                    ->letters()       // Wajib mengandung huruf
                    ->mixedCase()     // Wajib kombinasi huruf Besar & Kecil
                    ->numbers()       // Wajib mengandung minimal 1 angka
                    ->symbols()       // Wajib mengandung minimal 1 simbol (@, #, $, dll)
                    // ->uncompromised() // (Opsional) Cek apakah password pernah bocor di kebocoran data publik
        ]];
    }

    public function messages(): array
    {
        return [
            'nama.required'     => 'Nama lengkap wajib diisi.',
            'email.required'    => 'Email wajib diisi.',
            'email.email'       => 'Format email tidak valid.',
            'email.unique'      => 'Email sudah terdaftar.',
            'no_hp.required'    => 'Nomor HP wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min'      => 'Password minimal 8 karakter.',
            'password.confirmed'=> 'Konfirmasi password tidak cocok.',
        ];
    }
}
