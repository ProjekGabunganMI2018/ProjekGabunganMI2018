<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suratkeluar;
class SuratKeluarController extends Controller
{
    public function create(){
        return view ('Suratkeluar.create');

    }
    public function store(Request $request){
        $input=$request->all();

        Suratkeluar::create($input);

        return redirect('/Suratkeluar');
    }
    public function index (){
        $list_suratkeluar=Suratkeluar::all();
        return view('Suratkeluar.index',compact('list_Suratkeluar'));

    }

    public function destroy($id){
        $list_suratkeluar=Suratkeluar::where('id',$id)->delete();
        return redirect('/Suratkeluar');

    }
    public function edit($id){
        $list_suratkeluar=Jenissurat::where('id',$id)->first();
        return view('Suratkeluar.edit',compact('list_Suratkeluar'));

    }
    public function update($id, Request $request){
        $input=$request->except(['_method','token']);

        $list_suratkeluar=Suratkeluar::where('id',$id)->first();

        return redirect('/Suratkeluar');
    }
    public function show($id){
        $list_suratkeluar=Suratkeluar::where('id',$id)->first();

        return view('Suratkeluar.show'.compact('list_Suratkeluar'));
    }
}
