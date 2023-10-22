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

class BagianController extends Controller
{
    public function index(Request $request)
    {
        try {
            if (!isset($_COOKIE['nama_pegawai'])) {
                return redirect('/login');
            }
            $listData = Bagian::all();

            return view('bagian/index', [
                'listData' => $listData,
            ]);
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function create(Request $request)
    {
        try {
            if (!isset($_COOKIE['nama_pegawai'])) {
                return redirect('/login');
            }
            $listData = Bagian::all();

            return view('bagian/create', [
                'listData' => $listData,
            ]);
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function store(Request $request)
    {
        DB::select("INSERT INTO bagian (nama_bagian) VALUES ('$request->nama_bagian')");

        return redirect('bagian');
    }

    public function edit($id)
    {
        try {
            if (!isset($_COOKIE['nama_pegawai'])) {
                return redirect('/login');
            }

            $data = DB::select("SELECT id_bagian, nama_bagian FROM bagian WHERE id_bagian = $id LIMIT 1");
            $data = $data[0];

            return view('bagian/edit', [
                'data' => $data,
            ]);
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function update(Request $request)
    {
        DB::select("UPDATE bagian SET nama_bagian = '$request->nama_bagian' WHERE id_bagian = '$request->id_bagian'");

        return redirect('bagian');
    }

    public function delete($id)
    {
        DB::select("DELETE FROM bagian WHERE id_bagian = $id");

        return redirect('bagian');
    }
}
