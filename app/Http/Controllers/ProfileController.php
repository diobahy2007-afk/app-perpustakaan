<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Tugas 1: tampilkan profil user yang sedang login
    public function show()
    {
        $user = auth()->user();

        return view('profil.show', compact('user'));
    }

    // Tugas 2: ganti password
    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|min:8|confirmed',
        ], [
            'password_lama.required' => 'Password lama wajib diisi.',
            'password_baru.required' => 'Password baru wajib diisi.',
            'password_baru.min' => 'Password baru minimal 8 karakter.',
            'password_baru.confirmed' => 'Konfirmasi password baru tidak cocok.',
        ]);

        $user = auth()->user();

        // Cek password lama cocok dengan yang tersimpan
        if (! Hash::check($validated['password_lama'], $user->password)) {
            return back()->withErrors([
                'password_lama' => 'Password lama tidak sesuai.',
            ]);
        }

        // Simpan password baru dalam bentuk hash
        $user->update([
            'password' => Hash::make($validated['password_baru']),
        ]);

        return redirect()->route('profil')
            ->with('success', 'Password berhasil diubah.');
    }
}