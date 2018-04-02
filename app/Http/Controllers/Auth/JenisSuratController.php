<?php
namespace App/http/Controllers/Auth;
use ...

class JenisSuratControllers extends Controller
{
    public function create()
    {
        return view("JenisSurat.create");
    }
    public function store(Request $request){
        $input=$request->all();

        JenisSurat::create($input);

        return redirect('index/');
    }
}


