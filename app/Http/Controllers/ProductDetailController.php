<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Validation\Rules\Exists;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $ProductDetails = ProductDetail::with(['Product'])->get();
        return view('product-details.index', compact('ProductDetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $products = Product::all();
        return view('product-details.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        
        $request->validate([
            'product_id' => 'required',
            'size' => 'required',
            'weight' => 'required',
            'extraNote' => 'required',
        ]);

        ProductDetail::create($request->all());

        return redirect()->route('product-details.index')->with('success', 'Product Details created successfully.');
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
    public function edit(ProductDetail $ProductDetail)
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
