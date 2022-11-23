<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use App\Models\Product;
use Carbon\Carbon;
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
        $user = User::find(Auth::user()->id);
        $products = $user->products;
        return view('backend.pages.product', compact('products'));
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

            if ($request->img == null || $request->name == null || $request->price == null) {
                Toastr::error( "One field is empty..Please Fill up", 'Message', ["positionClass" => "toast-top-center"]);
            return redirect()->route('product.index');
            } else {
                 
         $image = $request->img;
         
         if(isset($image))
         {
 //            make unipue name for image
             $currentDate = Carbon::now()->toDateString();
             $imageName  = '-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
 
             if(!Storage::disk('public')->exists('product'))
             {
                 Storage::disk('public')->makeDirectory('product');
             }
 
             $productImage = Image::make($image)->save();
             Storage::disk('public')->put('product/'.$imageName,$productImage);
 
         } else {
             $imageName = "default.png";
         }
         

        $product = new Product([
           'name' => $request->get('name'),
           'price' => $request->get('price'),
           'img' => $imageName,
           'user_id' => Auth::user()->id
       ]);

       $product->save();


       // return redirect('/products')->with('success', 'product saved.');   // 
       Toastr::success( "Product uploaded successfully", 'Message', ["positionClass" => "toast-top-right"]);

       return back();
            }

        


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

        if ($request->img == null || $request->name == null || $request->price == null) {
            Toastr::error( "One field is empty", 'Message', ["positionClass" => "toast-top-center"]);
            return redirect()->route('product.index');
        } else {
            $image = $request->img;
  
            if(isset($image))
            {
    //            make unipue name for image
                $currentDate = Carbon::now()->toDateString();
                $imageName  ='-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
    
                if(!Storage::disk('public')->exists('product'))
                {
                    Storage::disk('public')->makeDirectory('product');
                }
                
                //            delete old post image
                if (Storage::disk('public')->exists('product/'.$product->image))
            {
                Storage::disk('public')->delete('product/'.$product->image);
            }
    
                $productImage = Image::make($image)->save();
                Storage::disk('public')->put('product/'.$imageName,$productImage);
    
            } else {
                $imageName = "";
            }
   
            // $prod = Product::find($id);
            $prod->name = $request->name;
            $prod->price = $request->price;
            $prod->img = $imageName;
            $prod->user_id = Auth::user()->id;
            $prod->save();
   
            Toastr::success( "Product Updated successfully", 'Message', ["positionClass" => "toast-top-right"]);
            return redirect()->route('product.index');
   
        }
        
      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (Storage::disk('public')->exists('product/'.$product->image))
        {
            Storage::disk('public')->delete('product/'.$product->image);
        }
     
        $product->delete();
        Toastr::success('product Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
