<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function selectAllCustomers(Request $request)
    {
        $customers = Customer::query();
        if ($request->has('blocked') && !empty($request->get('blocked'))) {
            $customers = $customers->where('blocked', $request->get('blocked') == 'on' ? 'true' : 'false');
        }
        if ($request->has('email') && !empty($request->get('email'))) {
            $customers = $customers->where('email', 'like', '%' . $request->get('email') . '%');
        }
        if ($request->has('num') && !empty($request->get('num'))) {
            $customers = $customers->where('phone', 'like', '%' . $request->get('num') . '%');
        }
        if ($request->has('name') && !empty($request->get('name'))) {
            $customers = $customers->where('name', 'like', '%' . $request->get('name') . '%')
                ->orWhere('lastname', 'like', '%' . $request->get('name') . '%');
        }

        return view('customers', [
            'customers' => $customers->paginate(20)
        ]);
    }

    public function selectOneCustomer(int $id)
    {
        return view('customer_card', [
            'customer' => Customer::query()->findOrFail($id)
        ]);
    }
}
