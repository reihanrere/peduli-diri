<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\kota;
use \App\Model\Perjalanan;
use \App\User;

class AdminController extends Controller
{
    public function AdminIndex() {

        $kota = kota::all();
        $perjalanan = perjalanan::all();
        $user = user::all();

        return view('admin.index',compact('kota','perjalanan','user'));

    }
}
