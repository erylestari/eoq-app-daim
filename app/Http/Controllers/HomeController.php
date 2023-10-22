<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Bagian;
use Illuminate\Http\Request;
use App\Models\Users;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        try {
            if (!isset($_COOKIE['nama_pegawai'])) {
                return redirect('/login');
            }

            return view('index');
        } catch (Exception $e) {
            dd($e);
        }
    }
}
