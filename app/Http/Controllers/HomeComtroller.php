<?php

namespace App\Http\Controllers;

use App\Models\Prodct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeComtroller extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        } else {
            $data = Prodct::paginate(3);
            return view('user.home', compact("data"));
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {
            $data = Prodct::paginate(3);
            return view('user.home', compact("data"));
        }
    }

    public function searchProduct(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = Prodct::paginate(3);
            return view('user.home', compact("data"));
        }
        $data = Prodct::where('pName', 'Like', '%' . $search . '%')->get();
        return view('user.home', compact("data"));
    }
}
