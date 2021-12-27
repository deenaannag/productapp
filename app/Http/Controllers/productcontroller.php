<?php

namespace App\Http\Controllers;
use App\Models\categorymodel;
use App\Models\productmodel;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product');
    
    }
    public function createcategory()
    {
        return view('product_category');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
     $getpcategory=request('pcategory');
     $category=new categorymodel();
     $category->pcategory=$getpcategory;
     $category->save();
     return redirect('product_category');
  
    }
    public function storeg(Request $request)
    {
        $getpcategory= request('pcategory');
        $category=new categorymodel();
        $category->pcategory=$getpcategory;
        $category->save();
        return view('product');
    }
    public function getAllGenre()
    {
     $bcategory=categorymodel::all();
     return view('product',compact('bcategory'));

    }
    public function store_product(Request $request)
    {
    
     $getproduct_name=request('pname');
     $getproduct_category=request('pcategory');
     $getproduct_unit=request('punit');
     $getSelling_price=request('psp');
     $getBuying_price=request('pbp');
     $product=new productmodel();
     $product->pname=$getproduct_name;
     $product->pcategory=$getproduct_category;
     $product->punit=$getproduct_unit;
     $product->psp=$getSelling_price;
     $product->pbp=$getBuying_price;

     $product->profit=$getBuying_price - $getSelling_price;

     $product->save();
     return redirect('/productview');
  
    }
    public function search(Request $request)
    {
        $getpcategory=request('pcategory');
        $products=productmodel::query()
        ->where('pcategory','LIKE',"%{$getpcategory}%")
        ->paginate(5);
        return view('product_view',compact('products'));
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
    public function productview()
    {
        $products=productmodel::paginate(5);
        return view('product_view',compact('products'));
    }
}
