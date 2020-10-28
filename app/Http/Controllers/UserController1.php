<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController1 extends Controller
{
    public function index(){
        $users = new User;
        $datas = $users->getAll();
        return view('pages/biodata', compact('datas'));
    }

    public function create(){
        
    }

    public function getUser($nama){
        $name = $nama;
        return view('pages/biodata')->with('name', $nama);
    }
    public function form(){
        return view('pages/form');
    }

    public function insertUser(Request $request){
        $name = $request->input('name');
        $adress = $request->input('adress');
        return "Name :" .$name. ", Adress : " .$adress;
    }

    public function dashboard(){
        return view('pages/dashboard');
    }
}
