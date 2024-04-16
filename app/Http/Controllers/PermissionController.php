<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Permission::with('user', 'detail_user')->get();
        return view('pages.permission.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // get nama user query builder
        $users = User::with('detail_user')->get();

        return view('pages.permission.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $request->validate([
            'fullname' => 'required',
            'permission' => 'required',
            'lampiran' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('lampiran')->store('admin/assets/photo', 'public');;
        $data = Permission::create(
            [
                'user_id' => $request->full_name,
                'permission' => $request->permission,
                'lampiran' => $image,
                'status' => 'Pending',
            ]
        );

        return redirect('/permission')->with('success', 'Data Berhasil');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete
        $data = Permission::find($id);
        $data->delete();
        return redirect('/permission')->with('success', 'Data Berhasil');
    }

    public function accept(string $id){
        $data = Permission::find($id);
        $data->status = 'accepted';
        $data->save();
        return redirect('/permission')->with('success', 'Data Berhasil');
    }

    public function reject(string $id){
        $data = Permission::find($id);
        $data->status = 'rejected';
        $data->save();
        return redirect('/permission')->with('success', 'Data Berhasil');
    }
}
