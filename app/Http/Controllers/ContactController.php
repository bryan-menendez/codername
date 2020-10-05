<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function getIndex()
    {
        return view('contacts/index');
    }

    public function getList()
    {
        $contacts = Contact::all();

        return view('contacts/partials/contactList', compact($contacts, 'contacts'));
    }

    public function postStore(Request $request)
    {
        //return Contact::create($request->all());

        $data = request()->validate([
            'name' => 'required|min:3',
            'phone' => 'required',
            'comment' => ''
        ]);
        Contact::create($data);
    }

    public function getDetails($id)
    {
        return Contact::find($id);
    }

    public function postUpdate(Request $request)
    {
        if ($request->has('id'))
        {
            $record = Contact::find($request->input('id'));
            $data = request()->validate([
                'name' => 'required|min:3',
                'phone' => 'required',
                'comment' => ''
            ]);
            $record->update($data);
        }
    }

    public function postDelete(Request $request)
    {
        if ($request->has('id'))
        {
            $record = Contact::where('id', $request->input('id'));
            $record->delete();
        }
    }
}
