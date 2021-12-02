<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = DB::table('transactions')->join('products', 'transactions.id_products', '=', 'products.id')
        ->select('transactions.id','transactions.created_at','transactions.name', 'transactions.mobile', 'transactions.address1',
        'transactions.address2', 'transactions.province', 'transactions.city', 'transactions.postalcode', 'transactions.amount',
        'transactions.totalprice', 'products.id', 'products.productname', 'products.price', 'products.category', 'products.description',
        'products.image')->orderby('transactions.id', 'desc')->get();
        
        return view('admindashboard',compact('transaction'));
    }

    public function adminproduct(){
        $product = Product::all();

        return view('adminproduct',compact('product'));
    }

    public function admintransaction(){
        $transaction = DB::table('transactions')->join('products', 'transactions.id_products', '=', 'products.id')
        ->select('transactions.id','transactions.created_at','transactions.name', 'transactions.mobile', 'transactions.address1',
        'transactions.address2', 'transactions.province', 'transactions.city', 'transactions.postalcode', 'transactions.amount',
        'transactions.totalprice', 'products.productname', 'products.price', 'products.category', 'products.description',
        'products.image')->orderby('transactions.id', 'desc')->get();
        
        return view('admintransaction',compact('transaction'));
    }

    public function transactiondetails($id){
        $transaction = transaction::where('id', $id)->get();
        $product = Product::where('id', $transaction[0]->id_products)->get();
        
        return view('transaction-details',compact('transaction','product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
