<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   

    public function hapus($id)
    {
        $adm = Admin::findOrFail($id);
        $adm->delete();
        return back()->with('success', 'Data berhasil dihapus.');
    }

    public function index()
    {
        return view('admin');
    }

    public function add(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'mata_kuliah' => 'required',
            'nama_dosen' => 'required',
            'jumlah_sks' => 'required',
        ]);

        $admin = new Admin();
        $admin->nama = $request->input('nama');
        $admin->nim = $request->input('nim');
        $admin->mata_kuliah = $request->input('mata_kuliah');
        $admin->nama_dosen = $request->input('nama_dosen');
        $admin->jumlah_sks = $request->input('jumlah_sks');
        $cek = $admin->save();

        return redirect()->route('admin.list')->with('success', 'Admin created successfully');
    }

    public function list()
    {
        $admins = Admin::all();
        return view('list', compact('admins'));
    }

    
}
