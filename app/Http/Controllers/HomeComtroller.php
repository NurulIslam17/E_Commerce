<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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
            $user = auth()->user();
            $count = Cart::where('phone',$user->phone)->count();
            return view('user.home', compact("data","count"));
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

    //addCart

    public function addCart(Request $request,$id){

        if(Auth::id()){
            $user = auth()->user();
            $cart = new Cart();
            $product = Prodct::find($id);
            
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->p_title = $product->pName;
            $cart->price = $product->pPrice;
            $cart->quantity = $request->cartQuantity;
            $cart->save();
            return redirect()->back();
        }
        else{
            return redirect('login');
        }
        $cartQ = $request->cartQuantity;

    }
}
