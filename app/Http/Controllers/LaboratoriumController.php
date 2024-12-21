<?php

namespace App\Http\Controllers;

use App\Models\Laboratorium;
use Illuminate\Http\Request;

class LaboratoriumController extends Controller
{
    public function index()
    {
        return view('admin.laboratorium.index',[
            'data' => Laboratorium::all()
        ]);
    }
    public function create()
    {
        return  view('admin.laboratorium.create');
    }
}
