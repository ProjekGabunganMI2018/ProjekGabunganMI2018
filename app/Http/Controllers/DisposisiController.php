<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use Illuminate\Http\Request;

class DisposisiController extends Controller
{
    public function create()
    {
        return view('disposisi.create');
    }

    public function store(Request $request){
        $input=$request->all();

        Disposisi::create($input);

        return redirect('disposisi');
    }

    public function index(){
        $list_disposisi=Disposisi::all();
        return view('disposisi.index',compact('list_disposisi'));
    }

    public function destroy($id){
        $disposisi=Disposisi::where('id',$id)->delete();
        return redirect('disposisi');
    }
    public function edit($id) {
        $disposisi=Disposisi::where('id',$id)->first();
        return view('disposisi.edit',compact('disposisi'));

    }
    public function update($id, Request $request){
        $input=$request->except(['_method','_token']);

        $disposisi=Disposisi::where('id',$id)->first()->update($input);

        return redirect('disposisi');
    }

    public function show($id){
        $disposisi=Disposisi::where('id',$id)->first();

        return view('disposisi.show',compact('disposisi'));
    }
}
