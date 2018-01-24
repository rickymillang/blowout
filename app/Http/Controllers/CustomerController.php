<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->customers = User::withRole('customer')->get();
    }

    public function index()
    {
        return view('customers.index')
            ->with('customers', $this->customers);
    }

    public function destroy($id)
    {
        $customer = User::find($id);

        $customer->delete();

        return redirect('/customers');
    }
}
