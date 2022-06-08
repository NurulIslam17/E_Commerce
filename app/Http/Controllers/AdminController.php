<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addUser(){
        return view('admin.addUser');
    }
    public function viewUsers(){
        return view('admin.viewUsers');
    }
}
