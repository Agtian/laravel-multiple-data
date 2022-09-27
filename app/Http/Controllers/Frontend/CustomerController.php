<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DetailCustomer;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('frontend.customer.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $customer = new Customer;
        $customer->name = $data['name'];
        $customer->email = $data['email'];
        $customer->save();

        // $detailCustomer = new DetailCustomer;
        // $detailCustomer->user_id    = $customer['id'];
        // $detailCustomer->address    = $data['address'];
        // $detailCustomer->phone      = $data['phone'];
        // $detailCustomer->kode_pos   = $data['kode_pos'];
        // $detailCustomer->save();

        $countData = count($data['address']);
        if ($countData > 0) {
            foreach ($data['address'] as $item => $value) {
                $data2 = [
                    'user_id'   => $customer->id,
                    'address'   => $data['address'][$item],
                    'phone'     => $data['phone'][$item],
                    'kode_pos'  => $data['kode_pos'][$item],
                ];
                DetailCustomer::create($data2);
            }
        }

        return redirect()->back()->with('status', 'Data berhasil di input.');
    }
}
