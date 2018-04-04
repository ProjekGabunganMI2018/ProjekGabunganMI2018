<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsalSurat;
class Disposis extends Controller
{
    public function create()
    {
        return view(\'asal_surat.create\');
}

public function store(Request $request){
$input=$request->all();

AsalSurat::create($input);

return redirect',compact('asalsurat'));

}
    public function update($id, Request $request){
        $input=$request->except(['_method','_token']);

        $asalsurat=AsalSurat::where('id',$id)->first()->update($input);

        return redirect('asal_surat');
    }

    public function show($id){
        $asalsurat=AsalSurat::where('id',$id)->first();

        return view('asal_surat.show',compact('asalsurat'));
    }


}
}

public function index(){
    $list_asalsurat=AsalSurat::all();
    return view('asal_surat.index',compact('list_asalsurat'));
}

public function destroy($id){
    $asalsurat=AsalSurat::where('id',$id)->delete();
    return redirect('asal_surat');
}
public function edit($id) {
    $asalsurat=AsalSurat::where('id',$id)->first();
    return view('asal_surat.edi
<


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DisposisiController extends Controller
{
    //
}
