<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use function SebastianBergmann\Type\TestFixture\voidReturnType;

class ShopController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();
        return view('shop', compact('products'));
    }

    public function getAllProducts()
    {
        $allProducts = ProductModel::all();
        return view('allProducts', compact('allProducts'));
    }


    public function addProduct()
    {
        return view('addProduct');
    }

    public function sendProduct(Request $request)
    {


        $request->validate([
            "product_name" => "required|string",
            "description" => "required",
            "amount" => "required",
            "price" => "required|int"
        ]);

        ProductModel::create([
            "name" => $request->get("product_name"),
            "description" => $request->get("description"),
            "amount" => $request->get("amount"),
            "price" => $request->get("price")
        ]);

        return redirect('/');
    }

}
