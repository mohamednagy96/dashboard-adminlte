<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins= Admin::paginate(10);
        return view('admin.pages.admins.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Admin $admin)
    {
        $inputs=$request->all();
        $inputs['password']=bcrypt($inputs['password']);
        $admin=Admin::create($inputs);
        return redirect()->route('admin.admin_users.index')->with(['success'=>'save data']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.pages.admins.edit',compact('admin'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $inputs=$request->all();
        if($inputs['password']){
            $inputs['password']=bcrypt($inputs['password']);
        }else{
            $inputs['password']=$admin->password;
        }
        $admin->update($inputs);
        return redirect()->route('admin.admin_users.index')->with(['success'=>'Update Data']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.admin_users.index')->with(['success'=>'Delete Data']);
        // return redirect()->route('admin.admins.index')->with(['success'=>'save data']);
    }
}