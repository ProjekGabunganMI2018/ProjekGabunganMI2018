<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsalSurat;
class AsalSuratController extends Controller
{
    public function create()
    {
        return view('AsalSurat.create');
    }

    public function store(Request $request){
        $input=$request->all();

        AsalSurat::create($input);

        return redirect('/AsalSurat');
    }

    public function index(){
        $list_asalsurat=AsalSurat::all();
        return view('AsalSurat.index',compact('list_asalsurat'));
    }

    public function destroy($id){
        $list_asalsurat=AsalSurat::where('id',$id)->delete();
        return redirect('/AsalSurat');
    }
    public function edit($id) {
        $list_asalsurat=JenisSurat::where('id',$id)->first();
        return view('AsalSurat.edit',compact('list_asalsurat'));

    }
    public function update($id, Request $request){
        $input=$request->except(['_method','_token']);

        $list_asalsurat=AsalSurat::where('id',$id)->update($input);

        return redirect('/AsalSurat');
    }

    public function show($id){
        $list_asalsurat=AsalSurat::where('id',$id)->first();

        return view('AsalSurat.show',compact('list_asalsurat'));
    }


}
