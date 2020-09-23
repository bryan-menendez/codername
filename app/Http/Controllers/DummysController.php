<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dummy;

class DummysController extends Controller
{
    public function listDummys()
    {
        $dummys = Dummy::all();

        return view('dummys', compact('dummys'));
    }

    public function detail($id)
    {
        $dummy = Dummy::findOrFail($id);

        return view('dummys/detail/{id}', compact('dummy'));
    }

    public function insert(Request $r)
    {
        $dummy = new Dummy;

        $dummy->name = $r->name;
        $dummy->save();

        return redirect('dummys')->with('msg', 'added succ for mor pleshur');
    }

    public function insertView()
    {
        return view('dummys/insert');
    }
}
