<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = peminjaman::get();
        return view('admin.peminjaman.index' , compact('peminjaman'));
    }
}
