<?php
/**
 * Registration Controller
 * 
 * @author  Sandi Andrian <andrian.sandi@gmail.com>
 * @since   Aug 15, 2020
 **/

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Model
use App\Registration;

class RegistrationController extends Controller
{
    public function index()
    {
        return response()->json([
            'nama' => 'Jajang Nurjaman'
        ]); 
    }

    public function create(Request $request) 
    {
        $registration = Registration::create([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'agama' => $request->input('agama'),
            'no_ktp' => $request->input('no_ktp'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
            'email' => $request->input('email')
        ]);

        if($registration) {
            return response()->json([
                'status' => 200,
                'message' => 'Data Registrasi telah berhasil dibuat'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Data Registrasi gagal dibuat'
            ]);
        }
    }
}