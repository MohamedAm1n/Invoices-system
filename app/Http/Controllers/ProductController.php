<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::all();
        $products = Product::with('section')->get();
        return view('products.products',['sections'=>$sections,'products'=>$products]);
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
    //  * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $check = $request->validate([
            'product_name'=>'required|string',
            'product_description'=>'required|string',
            'section_id'=>'required'
        ]);
        $check['created_by'] = auth()->user()->name;
            if(!$check)
                return redirect(route('products'))->with('message');
        else
            Product::create($check);
        return redirect(route('products'))->with('message', 'successfully added!');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
    //  * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $sections = Section::all();
        return view('products.edit_product', ['product' => $product,'sections'=>$sections]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
    //  * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $edit_product = $request->validate([
            'product_name'=>'required|string',
            'product_description'=>'required|string',
            'section_id'=>'required'
        ]);
        if (!$edit_product)
            return back()->with('message');
        else
            $product->update($edit_product);
        return redirect(route('products'))->with('message','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
    //  * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products'))->with('message','تم حذف المنتج');
    }
}
