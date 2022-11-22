<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.product');
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

            // Validation for required fields (and using some regex to validate our numeric value)
            $request->validate([
                'name'=>'required',
                'price'=>'required',
                'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
         // Getting values from the blade template form

         //Getting image
         $imageName = time().'.'.$request->img->extension();  
        $request->img->move(public_path('product'), $imageName);

         $product = new Product([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'img' => $imageName,
            'user_id' => Auth::user()->id
        ]);
        $product->save();

        dd('product good');

        // return redirect('/products')->with('success', 'product saved.');   // 
        return back()->withError('Profile Updated successfully');


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
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
