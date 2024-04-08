<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        $currentTime = date("h:i:s");
        $hours = date("h");
        $latestProducts = DB::table('products')->orderBy('created_at','DESC')->take(6)->get();
        return view('welcome',compact("currentTime","hours","latestProducts"));
    }
}
