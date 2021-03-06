<?php

namespace App\Http\Controllers;

use App\Kembali;
use App\Rental;
use App\Mobil;
use App\Supir;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;


class KembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $kembali = Kembali::all();
        return view('kembali.index',compact('kembali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $rental = Rental::all();
        $kembali = Kembali::all();
        return view('kembali.create',compact('rental','kembali'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $this->validate($request,[
            
        'tgl_kembali_akhir'=>'required|',
        'jumlah_hari'=>'required|',
        'telat'=>'required|',
        'denda'=>'required|',
        'total_harga'=>'required|',
        'rental_id'=>'required|',

         ]);   

        $kembali = new Kembali;
        $kembali->tgl_kembali_akhir = $request->tgl_kembali_akhir;
        $kembali->jumlah_hari = $request->jumlah_hari;
        $kembali->telat = $request->telat;
        $kembali->denda = $request->denda;
        $kembali->total_harga = $request->total_harga;
        $kembali->rental_id = $request->rental_id;
        
        $awal = new Carbon($request->tgl_sewa);
        $akhir = new Carbon ($request->tgl_kembali);
        $hasil = "{$awal->diffInDays($akhir)}";
        $rental->jumlah_hari = $hasil;

        $mobil = Mobil::where('id', $rental->mobil_id)->first();
        $hargamobil = $mobil->harga_sewa;

        $supir = Supir::where('id', $rental->supir_id)->first();
        $hargasupir = $supir->harga_sewasupir;

        $rental->total_sewa=($hargamobil + $hargasupir) * $hasil;
        // $rental->save();
        return $kembali;
        // return redirect('kembali');


        // $this->validate($request,[
            
        //     'tgl_kembali_akhir'=>'required|',
        //     'rental_id'=>'required|'
                
                
        // ]);
        // $kembali = kembali::findOrFail($request->id);
        // $kembali->tgl_kembali_akhir = $request->tgl_kembali_akhir;
        
        
        
        // $awal = new Carbon($kembali->rental_id = $request->tgl_sewa);
        // $akhir = new Carbon ($request->tgl_kembali_akhir);
        // $hasil = "{$awal->diffInDays($akhir)}";
        // $kembali->jumlah_hari = $hasil;
        // $kembali->telat = $hasil- ($kembali->rental_id = $request->jumlah_hari);
        // // $denda=($hasil * ($request->harga_sewa + $request->harga_sewasupir))- $request->total_sewa;
        // // $rental->denda=$denda;
        // // $rental->total_harga= $hasil * ($request->harga_mobil + $request->harga_supir);
        
        
        // // return $kembali;
        // $kembali->save();
        // return redirect()->route('kembali.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */

    public function tambahcreate($id)
    {
       
        $rental = Rental::findOrFail($id);
        $kembali = Kembali::all();
        return view('kembali.create', compact('rental','kembali'));
    }

    public function show($id)
    {
        $kembali = Kembali::findOrFail($id);
        return view('kembali.show',compact('kembali'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kembali=Kembali::findOrFail($id);
        return view('kembali.edit', compact('kembali'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rental = rental::findOrFail($request->id);
        $rental = new Rental;
        $rental->nik_kons = $request->nik_kons;
        $rental->nama_kons = $request->nama_kons;
        $rental->jk_kons = $request->jk_kons;
        $rental->alamat = $request->alamat;
        $rental->no_hp = $request->no_hp;
        $rental->tgl_sewa = $request->tgl_sewa;
        $rental->tgl_kembali = $request->tgl_kembali;
        $rental->mobil_id = $request->mobil_id;
        $rental->supir_id = $request->supir_id;
        $rental->status="Belum";

        $awal = new Carbon($request->tgl_sewa);
        $akhir = new Carbon ($request->tgl_kembali);
        $hasil = "{$awal->diffInDays($akhir)}";
        $rental->jumlah_hari = $hasil;

        $mobil = Mobil::where('id', $rental->mobil_id)->first();
        $hargamobil = $mobil->harga_sewa;

        $supir = Supir::where('id', $rental->supir_id)->first();
        $hargasupir = $supir->harga_sewasupir;

        $rental->total_sewa=($hargamobil + $hargasupir) * $hasil;
        $rental->save();
        return redirect('kembali');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kembali = Kembali::findOrFail($id);
        $kembali->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('kembali.index');
    
    }
}
