<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        try {
            return view('login', [
                'error' => false,
            ]);
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function logout()
    {
        setcookie('nama_pegawai', null);

        return redirect('/login');
    }

    public function loginAction(Request $request)
    {
        try {
            $data = DB::select("SELECT * FROM pegawai WHERE username = '$request->username' AND password = '$request->password' LIMIT 1");
            $data = $data[0];

            setcookie('nama_pegawai', $data->nama_pegawai);
            return redirect('/');
        } catch (Exception $e) {
            return view('login', [
                'error' => true,
            ]);
        }
    }
}
