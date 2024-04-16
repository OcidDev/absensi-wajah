<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DetailUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('pages.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //request and validate
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
        ]);



        // store data model User
        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // get id user
        $data = User::latest('id')->first();

        // Store data model DetailUser
        DetailUser::create([
            'user_id' => $data->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birthday' => $request->birthday,
            'gender' => $request->gender
        ]);

        // delete user or detail user on not sucess
        if (!$data || !DetailUser::where('user_id', $data->id)->exists()) {
            return redirect('/user')->with('error', 'Data Gagal Ditambahkan');
        }

        return redirect('/user')->with('success', 'Data Berhasil');
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
        $data = User::find($id);
        return view('pages.user.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // request validate
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
        ]);

        $data = User::find($id);
        // get old password
        $old_password = $data->password;

        if ($request->password == null){
            $passwrod = $old_password;
        }else{
            $passwrod = Hash::make($request->password);
        }
        // update data model User
        $data->update([
            'email' => $request->email,
            'password' => $passwrod,
        ]);

        // get user_id
        $user_id = $data->id;

        // Store data model DetailUser where user id
        DetailUser::where('user_id', $user_id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birthday' => $request->birthday,
            'gender' => $request->gender
        ]);

        return redirect('/user')->with('success', 'Data Berhasil');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete user
        User::destroy($id);

        //delete detail user
        DetailUser::where('user_id', $id)->delete();

        return redirect('/user')->with('success', 'Data Berhasil');
    }
}
