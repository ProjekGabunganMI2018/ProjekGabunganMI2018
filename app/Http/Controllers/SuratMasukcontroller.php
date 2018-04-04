<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
 public function create()
    {
        return view('surat_masuk.create');
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
        $suratmasuk=SuratMasuk::where('id',$id)->first();
        return view('surat_masuk.edit',compact('suratmasuk'));

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
