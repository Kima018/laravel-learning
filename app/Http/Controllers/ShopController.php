<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use function SebastianBergmann\Type\TestFixture\voidReturnType;

class ShopController extends Controller
{
    public function index(): View
    {
        $products = ProductModel::all();
        return view('shop', compact('products'));
    }

    public function getAllProducts(): View
    {
        $allProducts = ProductModel::all();
        return view('allProducts', compact('allProducts'));
    }


    public function addProduct(): View
    {
        return view('addProduct');
    }

    public function sendProduct(Request $request):RedirectResponse
    {
        $request->validate([
            "product_name" => "required|string|unique:products,name",
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

        return redirect()->route('adminAllProducts');
    }

    public function adminAllProducts():View
    {
        $products = ProductModel::all();
        return view('adminAllProducts', compact('products'));
    }

    public function delete($product):RedirectResponse
    {
        $singleProduct = ProductModel::where(["id" => $product])->first();
        $singleProduct->delete();
        return redirect()->back();
    }

    public function singleProduct(ProductModel $product):View
    {
        return view('editProduct', compact('product'));
    }

    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            "product_name" => "required|string",
            "description" => "required",
            "amount" => "required",
            "price" => "required|int",
        ]);

        ProductModel::where(["id" => $request->get('product_id')])
            ->update([
                "name" => $request->get("product_name"),
                "description" => $request->get("description"),
                "amount" => $request->get("amount"),
                "price" => $request->get("price")
            ]);

        return redirect()->route('adminAllProducts');
    }

}
