<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Session;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $user_role = User::where('name','like','%'.(isset($request->search)?$request->search:'').'%')->paginate(isset($request->pagination)?$request->pagination:25);
        $title='Tabel User';
        return view('user_role.index', compact('user_role','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
    $title='Tambah Data User';
        return view('user_role.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        User::create($requestData);

        Session::flash('flash_message', 'User added!');

        return redirect('user_role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $user_role = User::findOrFail($id);
        $title='User '.$user_role->nama;
        return view('user_role.show', compact('user_role','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user_role = User::findOrFail($id);
        $roles=Role::all();

        $arrayRole=[];
        foreach($user_role->roles as $role){
            array_push($arrayRole,$role->id);
        }

        $title='Ubah User '.$user_role->nama;
        return view('user_role.edit', compact('user_role','title','roles','arrayRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $user = User::findOrFail($id);

        $requestRoles=[];
        if(isset($request->roles)) {
            foreach ($request->roles as $role) {
                $value = ["id" => $role];
                array_push($requestRoles, $value);
            }
        }

        try{
            DB::beginTransaction();

            $user->roles()->sync([]);
            $user->attachRoles($requestRoles);

            DB::commit();
            Session::flash('flash_message', 'User-Role berhasil ditambah!');
        }catch (Exception $e){
            DB::rollback();
            Session::flash('flash_message', 'User-Role gagal diubah!');
        }

        return redirect('user_role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        User::destroy($id);

        Session::flash('flash_message', 'User deleted!');

        return redirect('user_role');
    }
}
