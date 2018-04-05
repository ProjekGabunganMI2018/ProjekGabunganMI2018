<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Permission;
use Illuminate\Http\Request;
use Session;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $permissions = Permission::where('name','like','%'.(isset($request->search)?$request->search:'').'%')->paginate(isset($request->pagination)?$request->pagination:25);
        $title='Tabel Permission';
        return view('permissions.index', compact('permissions','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $title='Tambah Data Permission';
        return view('permissions.create',compact('title'));
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
        
        Permission::create($requestData);

        Session::flash('flash_message', 'Permission added!');

        return redirect('permissions');
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
        $permission = Permission::findOrFail($id);
        $title='Permission '.$permission->name;
        return view('permissions.show', compact('permission','title'));
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
        $permission = Permission::findOrFail($id);
        $title='Ubah Permission '.$permission->name;
        return view('permissions.edit', compact('permission','title'));
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
        
        $permission = Permission::findOrFail($id);
        $permission->update($requestData);

        Session::flash('flash_message', 'Permission updated!');

        return redirect('permissions');
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
        Permission::destroy($id);

        Session::flash('flash_message', 'Permission deleted!');

        return redirect('permissions');
    }
}
