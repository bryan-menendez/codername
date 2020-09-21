<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dummy;

class DummysController extends Controller
{
    public function list()
    {
        $dummys = Dummy::all();

        return view('dummys', compact('dummys'));
    }

    public function detail($id)
    {
        $dummy = Dummy::findOrFail($id);

        return view('dummys/detail', compact('dummy'));
    }
}
