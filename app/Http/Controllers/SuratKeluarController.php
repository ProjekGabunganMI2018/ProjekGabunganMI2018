<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;

class SuratKeluarController extends Controller
{
    public function create()
    {
        return view ('surat_keluar.create');

    }
    public function store(Request $request){
        $input=$request->all();

        SuratKeluar::create($input);

        return redirect('surat_keluar');
    }

    public function index (){
        $list_suratkeluar=SuratKeluar::all();
        return view('surat_keluar.index',compact('list_suratkeluar'));
    }

    public function destroy($id){
        $suratkeluar=SuratKeluar::where('id',$id)->delete();
        return redirect('surat_keluar');
    }
    public function edit($id){
        $suratkeluar=SuratKeluar::where('id',$id)->first();
        return view('surat_keluar.edit',compact('SuratKeluar'));

    }
    public function update($id, Request $request){
        $input=$request->except(['_method','token']);

        $suratkeluar=SuratKeluar::where('id',$id)->first();

        return redirect('surat_keluar');
    }
    public function show($id){
        $suratkeluar=SuratKeluar::where('id',$id)->first();

        return view('surat_keluar.show'.compact('suratkeluar'));
    }
}
