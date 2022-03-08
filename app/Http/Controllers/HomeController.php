<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = \App\User::all();
        $user2 = \App\User::all();
        $perjalanan = \App\Model\perjalanan::all();

        return view('home',compact('user','perjalanan','user2'));

    }

    public function show(){

        if(auth()->user()->role == 'admin') {
            $perjalanan = \App\Model\Perjalanan::with('User')->orderBy('status', 'asc')->get();
            return response()->json(["code" => "00", "message" => "success" , "data" => $perjalanan]);
        } elseif(auth()->user()->role == 'user'){
            $perjalanan = \App\Model\Perjalanan::where('user_id', auth()->user()->id)
            ->where(function ($query) {
                $query->where(DB::raw('datediff(now(),created_at)'),"<",3)
                ->orWhere('status',"<>","Sampai");
            })
            ->orderBy('status','asc')->get();
            $perjalanan->makeHidden(['user_id']);
            return response()->json(["code" => "00", "message" => "success" , "data" => $perjalanan]);
        }

    }

    public function create(Request $request) {

        if(empty($request['id_perjalanan'])){
            $perjalanan = \App\Model\Perjalanan::create($request->all());
            if (empty($request->status)) {
                $perjalanan->status = 'Dalam Perjalanan';
            }
            $perjalanan->save();
        } else {
            $perjalanan = \App\Model\Perjalanan::findOrfail($request['id_perjalanan']);
            $perjalanan->update($request->all());
            $perjalanan->save();
        }

        return response()->json(["code" => "00", "message" => "success"]);

    }

    public function changeStatus(Request $request){

        $perjalanan = \App\Model\Perjalanan::findOrFail($request['id_perjalanan']);
        $perjalanan->status = "Sampai";
        $perjalanan->save();

        return response()->json(["code" => "00", "message" => "success"]);

    }

    public function edit(Request $request, $id) {

        $perjalanan = \App\Model\Perjalanan::findOrFail($id);

        return response()->json(["code" => "00", "message" => "success", "data" => $perjalanan]);

    }

    public function profileUser() {

        $user = \App\User::where('id', Auth::user()->id)->first();

        return view('profile',compact('user'));

    }

    public function profileUpdate(Request $request, $id) {

        $user = \App\User::findOrFail($id);
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

        return redirect('/profile');
    }
}
