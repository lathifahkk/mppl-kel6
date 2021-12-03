<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function userlanding()
    {
        $product = Product::all();

        return view('landing',compact('product'));
    }
    
    public function userMaps()
    {
        $product = Product::all();

        return view('maps',compact('product'));
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
        $validateData = $request->validate([
            'productname' => 'required|max:255',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('image-products');
        }

        Product::create($validateData);

        return redirect('/adminproduct');
    }

    public function detail($id)
    {
        $product = Product::where('id', $id)->get();

        return view('productdetail', compact("product"));
    }

    public function checkout($id)
    {
        $product = Product::where('id', $id)->get();

        return view('check-out', compact("product"));
    }

    public function offlineproduct()
    {
        $product = Product::where('category', 'offline')->get();

        return view('offline-product', compact("product"));
    }
    public function onlineproduct()
    {
        $product = Product::where('category', 'online')->get();

        return view('online-product', compact("product"));
    }

    public function updateProduct(Request $request, $id){
        $validateData = $request->validate([
            'productname' => 'required|max:255',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
                $validateData['image'] = $request->file('image')->store('image-products');
            }   
        }else{
            $validateData['image'] = $request->oldImage;
        }

        Product::where('id',$id)->update([
            'productname' => $validateData['productname'],
            'price' => $validateData['price'],
            'category' => $validateData['category'],
            'description' => $validateData['description'],
            'image' => $validateData['image'],
        ]);

        return redirect('adminproduct')->with('status', 'Data Berhasil Diubah!');
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
