<?php

namespace App\Http\Controllers;

use App\Models\Laboratorium;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index',[
            'data' => Peminjaman::all(), // nnti diubah saat authentication sudah selesai
            'available_lab' => Laboratorium::where('status',1)->get()
        ]);
    }
}
