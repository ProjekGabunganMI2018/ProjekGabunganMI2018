<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use App\Models\SuratMasuk;
use App\User;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function create()
    {
        $jenis_surat=JenisSurat::pluck('nama','id');
        $penyimpan_surat=User::pluck('name','id');
        return view('surat_masuk.create',compact('jenis_surat','penyimpan_surat'));
    }

    public function store(Request $request){
        $input=$request->all();

        SuratMasuk::create($input);

        return redirect('surat_masuk');
    }

    public function index(){
        $list_suratmasuk=SuratMasuk::all();
        return view('surat_masuk.index',compact('list_suratmasuk'));
    }

    public function destroy($id){
        $suratmasuk=SuratMasuk::where('id',$id)->delete();
        return redirect('surat_masuk');
    }
    public function edit($id) {
        $jenis_surat=JenisSurat::pluck('nama','id');
        $penyimpan_surat=User::pluck('name','id');
        $suratmasuk=SuratMasuk::where('id',$id)->first();
        return view('surat_masuk.edit',compact('suratmasuk','jenis_surat','penyimpan_surat'));

    }

    public function cetak($id){
        $suratmasuk=SuratMasuk::where('id',$id)->first();
        return view('surat_masuk.print',compact('suratmasuk'));
    }

    public function update($id, Request $request){
        $input=$request->except(['_method','_token']);

        $suratmasuk=SuratMasuk::where('id',$id)->first()->update($input);

        return redirect('surat_masuk');
    }

    public function show($id){
        $suratmasuk=SuratMasuk::where('id',$id)->first();

        return view('surat_masuk.show',compact('suratmasuk'));
    }


}
