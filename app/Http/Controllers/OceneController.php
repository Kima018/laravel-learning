<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ocene;
use Illuminate\Http\Request;

class OceneController extends Controller
{
    public function index()
    {
        $ocene = Ocene::all();
        return view('ocene', compact("ocene"));
    }

    public function dodajOcenu()
    {
        return view("dodajOcenu");
    }

    public function novaOcena(Request $request)
    {
        $request->validate([
            "predmet" => "required|string",
            "ocena" => "required|integer|digits_between:1,5",
            "profesor" => "required|string",
        ]);

        Ocene::create([
            "predmet" => $request->get("predmet"),
            "ocena" => $request->get("ocena"),
            "profesor" => $request->get("profesor"),
        ]);
        return redirect("/ocene");

    }
}
