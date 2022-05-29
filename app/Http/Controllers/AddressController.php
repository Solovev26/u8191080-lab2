<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Customer;

class AddressController extends Controller
{
    public function selectAllAddresses()
    {
        dd(Address::query()->get()->first()->customer);
    }
}
