<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
class SuratMasukController extends Controller
{
    public function create()
    {
        return view('asal_surat.create');
    }

    public function store(Request $request){
        $input=$request->all();

        SuratMasuk::create($input);

        return redirect('asal_surat');
    }

    public function index(){
        $Suratmasuk=Suratmasuk::all();
        return view('asal_surat.index',compact('list_asalsurat'));
    }

    public function destroy($id){
        $suratmasuk=Suratmasuk::where('id',$id)->delete();
        return redirect('asal_surat');
    }
    public function edit($id) {
        $suratmasuk=Suratmasuk::where('id',$id)->first();
        return view('asal_surat.edit',compact('asalsurat'));

    }
    public function update($id, Request $request){
        $input=$request->except(['_method','_token']);

        $suratmasuk=Suratmasuk::where('id',$id)->first()->update($input);

        return redirect('asal_surat');
    }

    public function show($id){
        $suratmasuk=Suratmasuk::where('id',$id)->first();

        return view('asal_surat.show',compact('asalsurat'));
    }


}