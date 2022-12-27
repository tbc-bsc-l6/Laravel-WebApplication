<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

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
            else if($pro->Category == 'Book') {
                $book[] = $pro;
            }
        }
        $book = $this->paginate($book, 2);
        $book->withPath("");

        $movie = $this->paginate($movie, 2);
        $movie->withPath("");

        
        return view('product.index',['movie' => $movie, 'book' => $book])
        ->with('i',(request()->input('page',1) - 1) * 5)
        ->with('a',(request()->input('page',1) - 1) * 5);
        
         // this 'product is calling hte model'
        //  $product = Product::latest()->paginate(5);
        //  // when the page is loded it shoes the page produ.index
        //  return view('product.index',compact('product'))
        //      ->with('i',(request()->input('page',1) - 1) * 5);
    }
    public function paginate($items, $perPage = 4, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $total = count($items);
        $currentpage = $page;
        $offset = ($currentpage * $perPage) - $perPage ;
        $itemstoshow = array_slice($items , $offset , $perPage);
        return new LengthAwarePaginator($itemstoshow ,$total ,$perPage);
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
            'Image' => 'nullable|image|mimes:jpg,png',
        ]);
        $product = new Product;
        $product->Title = $request->input('Title');
        $product->Creator = $request->input('Creator');
        $product->PagesorLength = $request->input('PagesorLength');
        $product->Category = $request->get('Category');
        $product->Price = $request->input('Price');
        if($request->hasfile('Image'))
        {
            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file-> move('images/uploads/', $filename);
           $product->Image=$filename;
        }
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
    public function show(int $id)
    {
        $product = DB::table('product')->get()->where('id', $id)->first();

        return view('product.show',compact('product'));
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

        return view('product.edit',compact('product'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id, Product $product)
    {
        $request->validate([
            'Title' => 'required',
            'Creator' => 'required',
            'PagesorLength' => 'required',
            'Category' => 'required',
            'Price' => 'required',
        ]);
        DB::table('product')->where('id', $id)
        ->update([
        'Title' => $request->input('Title'),
        'Creator' => $request->input('Creator'),
        'PagesorLength' => $request->input('PagesorLength'),
        'Category' => $request->get('Category'),
        'Price' => $request->input('Price')
        ]);
        return redirect('/product')
        //->route('/lipstick/index')
            ->with('success', 'Product Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        DB::table('product')->where('id', $id)->delete();
        return redirect('/product')
        //->route('/lipstick/index')
            ->with('success', 'Product Deleted successfully!');
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $product = Product::where('Title','LIKE', '%'.$search_text.'%')->get();
        

        return view('product.search', compact('product'));

    }
}
