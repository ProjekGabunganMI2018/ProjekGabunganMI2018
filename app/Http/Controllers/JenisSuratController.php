<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisSurat;
class JenisSuratController extends Controller
{
    public function create()
    {
        return view('JenisSurat.create');
    }

    public function store(Request $request){
        $input=$request->all();

        JenisSurat::create($input);

        return redirect('/JenisSurat');
    }

    public function index(){
        $list_jenissurat=JenisSurat::all();
        return view('JenisSurat.index',compact('list_jenissurat'));
    }

    public function destroy($id){
        $list_jenissurat=JenisSurat::where('id',$id)->delete();
        return redirect('/JenisSurat');
    }
    public function edit($id) {
        $list_jenissurat=JenisSurat::where('id',$id)->first();
        return view('JenisSurat.edit',compact('list_jenissurat'));

    }
    public function update($id, Request $request){
        $input=$request->except(['_method','_token']);

        $list_jenissurat=JenisSurat::where('id',$id)->update($input);

        return redirect('/JenisSurat');
    }

    public function show($id){
        $list_jenissurat=JenisSurat::where('id',$id)->first();

        return view('JenisSurat.show',compact('list_jenissurat'));
    }


}
