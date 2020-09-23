<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dummy;

class DummysController extends Controller
{
    public function listDummys()
    {
        $dummys = Dummy::paginate(5);

        return view('dummys', compact('dummys'));
    }

    public function detail($id)
    {
        $dummy = Dummy::findOrFail($id);

        return view('dummys/detail', compact('dummy'));
    }

    public function insert(Request $r)
    {
        $r->validate([
            'name' => 'required'
        ]);

        $dummy = new Dummy;

        $dummy->name = $r->name;
        $dummy->save();

        return redirect('dummys')->with('msg', 'added succ for mor pleshur');
    }

    public function edit(Request $r, $id)
    {
        $dummy = Dummy::findOrFail($id);

        $r->validate([
            'name' => 'required'
        ]);

        $dummy->name = $r->name;
        $dummy->save();

        return redirect('dummys')->with('msg', 'updeited in the name of');
    }

    public function delete($id)
    {
        $dummy = Dummy::findOrFail($id);
        $dummy->delete();

        return redirect('dummys')->with('msg', 'target destroyed');
    }

    public function insertView()
    {
        return view('dummys/insert');
    }

    public function editView($id)
    {
        $dummy = Dummy::findOrFail($id);

        return view('dummys/edit', compact('dummy'));
    }
}
