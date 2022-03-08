<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\kota;
use \App\Model\Perjalanan;
use \App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminIndex() {

        $kotas = kota::all();
        $users = User::all();

        return view('admin.index',compact('kotas','users'));

    }

    public function CreateUser(Request $request) {
        $kota = kota::all();
        return view('admin.create-user',compact('kota'));
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
        $user->kota_id = $request->kota_id;
        $user->save();

        return redirect('/admin/index');
    }

    public function EditUser($id) {
        $kota = kota::all();
        $user = User::findOrFail($id);

        return view('admin.update-user',compact('kota','user'));
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

    public function CreateKota() {return view('admin.create-kota');}

    public function StoreKota(Request $request) {
        kota::create($request->all());

        return redirect('/admin/index');
    }

    public function EditKota($id) {
        $kota = kota::findOrFail($id);

        return view('admin.update-kota',compact('kota'));
    }

    public function UpdateKota(Request $request, $id) {
        $kota = kota::findOrFail($id);
        $kota->update($request->all());
        $kota->save();

        return redirect('/admin/index');
    }

    // public function DeleteKota($id) {
    //     // $user = User::findOrFail($id);
    //     $kota = kota::findOrFail($id);
    //     $kota->delete();
        
    //     // dd($kota);

    //     return redirect('/admin/index');
    // }
}
