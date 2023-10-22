<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\Users;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        try {
            if (!isset($_COOKIE['nama_pegawai'])) {
                return redirect('/login');
            }

            $listData = Barang::all();

            return view('barang/index', [
                'listData' => $listData,
            ]);
        } catch (Exception $e) {
            dd($e);
        }
    }
}
