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
        return view('admin.laboratorium.create');
    }
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama' => 'required|max:30',
            'status'=>'required|boolean'
        ]);

        if($validation)
        {
            Laboratorium::create([
                'nama'=>$request->nama,
                'status'=>$request->status
            ]);
            return redirect()->route('laboratorium.index')->with(['success'=>'Data berhasil ditambah!']);
        }
    }
    public function edit($id)
    {
        $laboratorium = Laboratorium::findOrFail($id);
        return view('admin.laboratorium.edit',[
            'laboratorium' =>$laboratorium
        ]);
    }
    public function destroy($id)
    {
        $laboratorium = Laboratorium::findOrFail($id);
        $laboratorium->delete();

        return redirect()->route('laboratorium.index')->with(['success'=>'Data berhasil dihapus!']);
    }
}
