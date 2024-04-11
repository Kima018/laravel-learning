<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function getAllContacts()
    {
        $allContacts = ContactModel::all();
        return view('allContacts', compact('allContacts'));
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            "email" => "required|string",
            "subject" => "required|string",
            "message" => "required|string|min:7"
        ]);

        ContactModel::create([
            "email" => $request->get('email'),
            "subject" => $request->get('subject'),
            "message" => $request->get('message')
        ]);

        return redirect('/');


    }

    public function delete($user)
    {
        $singleContact = ContactModel::where(["id"=>$user])->first();
        $singleContact->delete();
        return redirect()->back();


    }
}
