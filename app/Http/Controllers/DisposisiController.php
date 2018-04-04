<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disposisi;
class DisposisiController extends Controller
{
    public function create()
    {
        return view('asal_surat.create');
    }

    public function store(Request $request){
        $input=$request->all();

        Disposis::create($input);

        return redirect('asal_surat');
    }

    public function index(){
        $Disposis=Disposis::all();
        return view('asal_surat.index',compact('list_asalsurat'));
    }

    public function destroy($id){
        $Disposis=Disposis::where('id',$id)->delete();
        return redirect('asal_surat');
    }
    public function edit($id) {
        $Disposis=Disposis::where('id',$id)->first();
        return view('asal_surat.edit',compact('asalsurat'));

    }
    public function update($id, Request $request){
        $input=$request->except(['_method','_token']);

        $Disposis=Disposis::where('id',$id)->first()->update($input);

        return redirect('asal_surat');
    }

    public function show($id){
        $Disposis=Disposis::where('id',$id)->first();

        return view('asal_surat.show',compact('asalsurat'));
    }


}
