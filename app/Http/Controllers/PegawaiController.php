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

class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        try {
            if (!isset($_COOKIE['nama_pegawai'])) {
                return redirect('/login');
            }

            $listData = DB::select("SELECT id_pegawai, username, password, nama_pegawai, alamat_pegawai, hp_pegawai, nama_bagian FROM pegawai NATURAL JOIN bagian ORDER BY nama_pegawai ASC");

            return view('pegawai/index', [
                'listData' => $listData,
            ]);
        } catch (Exception $e) {
            dd($e);
        }
    }
}
