<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\AsalSurat;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AsalSuratController extends Controller
{
    public function create()
    {
        return view('AsalSurat.create');
    }
    public function store(Request $request){
        $input=$request->all();

        AsalSurat::create($input);

        return redirect('/index');
    }
}