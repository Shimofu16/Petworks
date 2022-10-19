<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\sale;
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
        $products = Product::all();
        $categories = category::all();
        return view('Petworks.admin.inventory.product.index', compact('products', 'categories'));
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

        try {
           $product_id = product::create(
                [
                    'product_name' => $request->input('product_name'),
                    'brand_name' => $request->input('brand_name'),
                    'category_id' => $request->input('category_id'),
                    'date' => $request->input('date'),
                    'price' => $request->input('price'),
                    'stock' => $request->input('stock'),
                ]
            )->id;
            sale::create([
                'product_id' => $product_id,
                'remain' => $request->input('stock'),
            ]);
            toast()->success('Success', 'You added a new record')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
        } catch (\Throwable $th) {
            toast()->warning('Info', 'You did not input any record ' . $th->getMessage())->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $products->update(
            [
                'product_name' => $request->input('product_name'),
                'brand_name' => $request->input('brand_name'),
                'category_id' => $request->input('category_id'),
                'date' => $request->date('date'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
            ]
        );
        if ($products->wasChanged()) {
            toast()->success('Success', 'You saved changes')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
        }
        toast()->info('Info', 'There is no changes')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
        return redirect()->route('admin.product.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
