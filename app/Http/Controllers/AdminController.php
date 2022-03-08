<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\Perjalanan;
use \App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminIndex() {
        $users = User::all();

        return view('admin.index',compact('users'));

    }

    public function CreateUser(Request $request) {
        return view('admin.create-user');
    }

    public function StoreUser(Request $request) {
        $user = new User;
        $user->role = $request->role;
        $user->nik = $request->nik  ;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->telp = $request->telp;
        $user->foto = "default.png";
        $user->alamat = $request->alamat;
        $user->save();

        return redirect('/admin/index');
    }

    public function EditUser($id) {
        $user = User::findOrFail($id);

        return view('admin.update-user',compact('user'));
    }

    public function UpdateUser(Request $request, $id) {

        $user = User::findOrFail($id);
        $user->update($request->all());
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        if ($request->hasFile('foto')){
            $request->file('foto')->move('image/',$request->file('foto')->getClientOriginalName());
            $user->foto=$request->file('foto')->getClientOriginalName();
            $user->save();
        }
        $user->save();

        return redirect('/admin/index');
    }

    public function DeleteUser($id) {

        $user = User::findOrFail($id);
        $user->perjalanan()->delete();
        $user->delete();

        return redirect('/admin/index');

    }
}
