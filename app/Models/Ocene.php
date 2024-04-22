<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocene extends Model
{
    protected $table = 'ocene';

    protected $fillable = [
        "predmet",
        "ocena",
        "profesor",
        "user_id"
    ];

    public static function createOcena($request)
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
