<?php

namespace App\Http\Controllers;

use App\Models\Investasi;
use App\Http\Requests\StoreInvestasiRequest;
use App\Http\Requests\UpdateInvestasiRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InvestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investasi = Investasi::all();
        $user = auth()->user();

        $sum = DB::table('investasi')->sum('jml_investasi');
        $nilai_perusahaan = $sum * 210000;

        return view('investasi/investasi',
            [
                'user' => $user,
                'nilai_perusahaan' => $nilai_perusahaan,
                'investasi' => $investasi,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        return view('investasi/tambah',
            [
                'user' => $user,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvestasiRequest $request)
    {
        // insert data ke table pegawai
        DB::table('investasi')->insert([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_investor' => $request->nama_investor,
            'jml_investasi' => $request->jml_investasi,
            'hasil_investasi' => 0,
            'tgl_investasi' => date('Y-m-d', strtotime($request->tgl_investasi)),
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/investasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Investasi $investasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $investasi = DB::table('investasi')->where('id',$id)->get();
        $user = auth()->user();
        
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('investasi/edit',[
            'investasi' => $investasi,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvestasiRequest $request, Investasi $investasi)
    {
        DB::table('investasi')->where('id',$request->id)->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_investor' => $request->nama_investor,
            'jml_investasi' => $request->jml_investasi,
            'hasil_investasi' => 0,
            'tgl_investasi' => date('Y-m-d', strtotime($request->tgl_investasi)),
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/investasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('investasi')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/investasi');
    }
}
