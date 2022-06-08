<?php

namespace App\Http\Controllers;

use App\Models\Prodct;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addUser()
    {
        return view('admin.addUser');
    }
    public function viewUsers()
    {
        return view('admin.viewUsers');
    }
    public function addProduct()
    {
        return view('admin.addProduct');
    }

    public function uploadProduct(Request $request)
    {
        $product = new Prodct();

        $product->pName = $request->name;
        $product->pPrice = $request->price;
        $product->pQuantity = $request->quantity;
        $product->pDesc = $request->description;

        $img = $request->image;
        $imgName = time() . '.' . $img->getClientOriginalExtension();
        $img->move("ProductImage", $imgName);
        $product->pImg = $imgName;

        $product->save();
        return redirect('/viewProduct');
    }

    public function viewProduct(){
        $data = Prodct::all();
        return view('admin.viewProduct',compact("data"));
    }

    public function edit($id){
        $edit = Prodct::find($id);
        return view('admin.editProduct',compact("edit"));

    }

    public function deleteProduct($id){
            $del = Prodct::find($id);
            $del ->delete();
            return redirect()->back();
    }
}
