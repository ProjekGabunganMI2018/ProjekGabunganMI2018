<?php

<<<<<<< HEAD
namespace App\Models;

use Eloquent as model;
use Illuminate\Database\Eloquent\SoftDeletes;


class JenisSurat extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'JenisSurat';

    const CREATED_AT = 'created_at';

    const UPDATED_AT = 'updated_at';

    protected $fillable = [

        'nama','format_surat','keterangan'

    ];


    public function RelasiJenisSurat()
    {
        return $this->hasMany('App\Models\SuratKeluar');
    }

    public function RelasiJenisSurat2()
    {
        return $this->hasMany('App\Models\SuratMasuk');
    }
=======
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


>>>>>>> origin/master
}
