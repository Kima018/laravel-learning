<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index():View
    {
        return view('contact');
    }

    public function getAllContacts():View
    {
        $allContacts = ContactModel::all();
        return view('allContacts', compact('allContacts'));
    }

    public function sendContact(Request $request):RedirectResponse
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

    public function delete($user):RedirectResponse
    {
        $singleContact = ContactModel::where(["id" => $user])->first();
        $singleContact->delete();
        return redirect()->back();


    }

    public function edit($id): View
    {
        $currentContact = ContactModel::where(["id" => $id])->first();
        return view('editContact', compact('currentContact'));
    }

    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            "email" => "required|string",
            "subject" => "required|string",
            "message" => "required|string"
        ]);
        ContactModel::where(["id" => $request->get('contact_id')])
            ->update([
                "email" => $request->get('email'),
                "subject" => $request->get('subject'),
                "message" => $request->get('message'),
            ]);
        return redirect()->route('adminAllContacts');
    }
}
