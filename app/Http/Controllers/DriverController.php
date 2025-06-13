<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'no_telepon' => 'required|string|max:20',
            'jns_kelamin' => 'required|in:pria,wanita',
            'alamat' => 'required|string',
            'umur' => 'required|integer|min:17|max:100',
            'data_diri' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $filePath = $request->file('data_diri')->store('uploads/data_diri', 'public');

        Driver::create([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'jns_kelamin' => $request->jns_kelamin,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
            'data_diri' => $filePath,
        ]);
        
        return back()->with('success', 'Pendaftaran mitra berhasil!');
    }
}
