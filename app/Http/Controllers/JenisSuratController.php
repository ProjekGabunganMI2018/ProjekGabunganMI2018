<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisSurat;

class JenisSuratController extends Controller
{
    public function create()
    {
        return view('jenis_surat.create');
    }

    public function store(Request $request){
        $input=$request->all();

        JenisSurat::create($input);

        return redirect('jenis_surat');
    }

    public function index(){
        $list_jenissurat=JenisSurat::all();
        return view('jenis_surat.index',compact('list_jenissurat'));
    }

    public function destroy($id){
        $jenissurat=JenisSurat::where('id',$id)->delete();
        return redirect('jenis_surat');
    }
    public function edit($id) {
        $jenissurat=JenisSurat::where('id',$id)->first();
        return view('jenis_surat.edit',compact('jenissurat'));

    }
    public function update($id, Request $request){
        $input=$request->except(['_method','_token']);

        $jenissurat=JenisSurat::where('id',$id)->first()->update($input);

        return redirect('jenis_surat');
    }

    public function show($id){
        $jenissurat=JenisSurat::where('id',$id)->first();

        return view('jenis_surat.show',compact('jenissurat'));
    }


}