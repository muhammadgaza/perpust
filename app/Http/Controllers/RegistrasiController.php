<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrasi;


class RegistrasiController extends Controller
{
    public function registrasi(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'password' => 'required',

            ]);


            $Registrasi = Registrasi::create([
                'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'password' => $request->password,
        ]);

        auth()->login($Registrasi);

        return redirect()->route('login');


    }
}
