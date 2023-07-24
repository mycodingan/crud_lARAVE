<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class AbsenSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//menampilka semua data
    {
        return view('Siswa.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =[
            'Nis'=>$request->Nis,
            'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'Angkatan' => $request->Angkatan,
            'No Wa' => $request->No_Wa,
        ];
        siswa::create($data);
        return 'hi';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}