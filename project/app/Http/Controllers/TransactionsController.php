<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\transaction;

class TransactionsController extends Controller
{
    //
    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address1' => 'required|max:255',
            'address2' => 'required|max:255',
            'province' => 'required|max:255',
            'city' => 'required|max:255',
            'postalcode' =>'required|numeric',
            'amount' => 'required|numeric',
        ]);

        $id = $request->id_products;

        $product = Product::where('id', $id)->select('price')->get();

        $total = $product[0]->price * $request->amount + 20000;

        $validateData['id_products'] = $id;
        $validateData['totalprice'] = $total;
        
        transaction::create($validateData);

        return redirect('/transaction-success');
    }

    public function index()
    {
        return view('transaction-success');
    }
}
