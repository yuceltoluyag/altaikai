<?php

namespace App\Controllers\Admin;

use App\Models\Customers;

class CustomersController
{
    public function show()
    {
        $customers = Customers::all();

        return view('admin/customers/customers', compact('customers'));
    }

    public function store()
    {
    }
}
