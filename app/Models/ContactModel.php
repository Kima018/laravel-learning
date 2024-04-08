<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = 'contact';  // ContactModel -> table "contact"
    protected $fillable = [
        "email",
        "subject",
        "message"
    ];
//    polja koja se mogu modifikovati u tabeli

}
