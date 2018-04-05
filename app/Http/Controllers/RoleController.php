<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Session;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $roles = Role::paginate(25);
        $title='Tabel Roles';
        return view('roles.index', compact('roles','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $permissions = Permission::all();
        $title='Tambah Data Roles';
        return view('roles.create',compact('permissions','title'));
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
        $requestPermissions=[];

        if(isset($request->permissions)) {
            foreach ($request->permissions as $permission) {
                $value = ["id" => $permission];
                array_push($requestPermissions, $value);
            }
        }

        try{
            DB::beginTransaction();
            $role = Role::create($requestData);

            $role->attachPermissions($requestPermissions);
            DB::commit();
            Session::flash('flash_message', 'Role berhasil ditambah!');
        }catch (Exception $e){
            DB::rollback();

            Session::flash('flash_message', 'Role gagal diubah!');
        }
        return redirect('roles');
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
        $role = Role::findOrFail($id);
        $title='Role '.$role->name;
        return view('roles.show', compact('role','title'));
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
        $role = Role::findOrFail($id);
        $permissions = Permission::all();

        $arrayPermission=[];
        foreach($role->perms as $permission){
            array_push($arrayPermission,$permission->id);
        }

        $title='Ubah Role '.$role->name;
        return view('roles.edit', compact('role','permissions','title','arrayPermission'));
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
        $requestPermissions=[];

        if(isset($request->permissions)) {
            foreach ($request->permissions as $permission) {
                $value = ["id" => $permission];
                array_push($requestPermissions, $value);
            }
        }

        $role = Role::findOrFail($id);

        try{
            DB::beginTransaction();
            $role->update($requestData);

            //$role->detachPermissions($role->perms);
            $role->perms()->sync([]);

            $role->attachPermissions($requestPermissions);

            DB::commit();
            Session::flash('flash_message', 'Role berhasil ditambah!');
        }catch (Exception $e){
            DB::rollback();
            Session::flash('flash_message', 'Role gagal diubah!');
        }
        return redirect('roles');
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
        Role::find($id)->delete();
        //Role::destroy($id);

        Session::flash('flash_message', 'Role deleted!');

        return redirect('roles');
    }
}
