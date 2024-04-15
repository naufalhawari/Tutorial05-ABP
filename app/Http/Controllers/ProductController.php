<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Validation\ValidatesRequests;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $prods = Product::get();
        if (request()->segment(1) == 'api') return response()->json($prods);
        
        return view('view_product', [
            'title' => 'Daftar Produk',
            'data' => $prods,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('form_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required|min:4',
            'price' => 'required|integer|min:1000000',
        ]);

        $prod = new Product;

        $prod->name = $request->name;
        $prod->price = $request->price;

        $prod->save();

        return redirect('/product')->with('message', 'Produk berhasil ditambah');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
