<?php

namespace App\Http\Controllers;

use App\Models\Order;
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


    // **************************** Product ********************************

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

    public function viewProduct()
    {
        $data = Prodct::all();
        return view('admin.viewProduct', compact("data"));
    }

    public function edit($id)
    {
        $edit = Prodct::find($id);
        return view('admin.editProduct', compact("edit"));
    }

    public function updateProduct(Request $request, $id)
    {
        $update = Prodct::find($id);

        $update->pName = $request->name;
        $update->pPrice = $request->price;
        $update->pQuantity = $request->quantity;
        $update->pDesc = $request->description;

        $img = $request->image;
        $imgName = time() . '.' . $img->getClientOriginalExtension();
        $img->move("ProductImage", $imgName);
        $update->pImg = $imgName;

        $update->save();
        return redirect('/viewProduct');
    }

    public function deleteProduct($id)
    {
        $del = Prodct::find($id);
        $del->delete();
        return redirect()->back();
    }

    //************************************************************************* */
    //showOrder
    public function showOrder(){
        $data = Order::all();
        return view('admin.showOrder',compact("data"));
    }

    // delivered

    public function delivered($id)
    {
        $upStatus = Order::find($id);
        $upStatus->status = "Delivered";
        $upStatus->save();
        return redirect()->back()->with('statusUp','Order is delivered');

    }
}
