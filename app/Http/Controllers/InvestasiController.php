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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvestasiRequest $request)
    {
        $user = auth()->user();
        return view('investasi/tambah',
            [
                'user' => $user,
            ]
        );
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
    public function edit(Investasi $investasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvestasiRequest $request, Investasi $investasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Investasi $investasi)
    {
        //
    }
}
