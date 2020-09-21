<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function list()
    {
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        
        //$customers = Customer::all();

        //return view('internals.customers', [ 
        //    'activeCustomers' => $activeCustomers,
        //   'inactiveCustomers' => $inact
        //]);

        return view('/customers', compact('activeCustomers', 'inactiveCustomers'));
    }

    public function insert()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required'
        ]);

        Customer::create($data);

        return back();
    }
}
