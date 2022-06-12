<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Prodct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            $count = Cart::where('phone', $user->phone)->count();
            return view('user.home', compact("data", "count"));
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

    public function addCart(Request $request, $id)
    {

        if (Auth::id()) {
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
        } else {
            return redirect('login');
        }
        $cartQ = $request->cartQuantity;
    }

    //viewCartProduct

    public function viewCartProduct()
    {
        $user = auth()->user();
        $cart = Cart::where('phone', $user->phone)->get();
        $count = Cart::where('phone', $user->phone)->count();
        return view('user.showCart', compact("count", "cart"));
    }
    //deleteProductCart
    public function deleteProductCart($id)
    {
        $del = Cart::find($id);
        $del->delete();
        return redirect()->back()->with('msg', 'Product remove from cart successfully');
    }

    //order
    public function order(Request $request)
    {
        $user = auth()->user();
        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;

        foreach ($request->productName as $key=>$productName) 
        {
            $order = new Order();
            $order->name =$name;
            $order->phone =$phone;
            $order->address =$address;
            $order->product = $request->productName[$key];
            $order->quantity = $request->quantity[$key];
            $order->price = $request->price[$key];
            $order->status = 'Not Delivered';
            $order->save();
        }
        DB::table('carts')->where('phone',$phone)->delete();
        return redirect()->back()->with('orderMsg','You ordered is successfull');
    }
}
