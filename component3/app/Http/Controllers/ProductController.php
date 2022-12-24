<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $product = DB::table('product')->get();

        $movie = [];
        $book = [];

        foreach ($product as $pro) {
            if ($pro->Category == 'Movie') {
                $movie[] = $pro;
            }
            else {
                $book[] = $pro;
            }
        }

        return view('product.index',['movie' => $movie, 'book' => $book])
        ->with('i',(request()->input('page',1) - 1) * 5)
        ->with('a',(request()->input('page',1) - 1) * 5);
        
         // this 'product is calling hte model'
        //  $product = Product::latest()->paginate(5);
        //  // when the page is loded it shoes the page produ.index
        //  return view('product.index',compact('product'))
        //      ->with('i',(request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Creator' => 'required',
            'PagesorLength' => 'required',
            'Category' => 'required',
            'Price' => 'required',
        ]);
        $product = new Product;
        $product->Title = $request->input('Title');
        $product->Creator = $request->input('Creator');
        $product->PagesorLength = $request->input('PagesorLength');
        $product->Category = $request->get('Category');
        $product->Price = $request->input('Price');
        
        $product->save();
        return redirect('/product')
        //->route('/lipstick/index')
            ->with('success', 'Product Added successfully!');
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
    public function edit(int $id)
    {
     
        $product = DB::table('product')->get()->where('id', $id)->first();

        return view('product.edit',['product' => $product]);
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
