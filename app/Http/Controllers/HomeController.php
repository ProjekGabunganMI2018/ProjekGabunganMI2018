<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
        class testController extends Controller
{
    //mengampu request test dari web.php
    public function test()
    {
        //menampilkan halaman view di lokasi resources/views/test.blade.php
        return view('test');
    }
}