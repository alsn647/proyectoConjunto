<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($counter)
    {
        //
        $products = Product::where('visibility', 1)
            ->orderBy('id', 'asc')
            ->skip($counter)
            ->take(10)
            ->get();
        $images = Image::get();

        return response()->json([$products, $images], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $formInput = $request->all();
        $images = array();

        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->category()->associate(Category::findOrFail($request->get('category')));
        $product->price = $request->get('price');
        $product->tax = $request->get('taxes');
        $product->discount = $request->get('discount');
        $product->stock = $request->get('stock');
        $product->save();

        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $name = $file->hashName();
                $file->move('images', $name);
                $images[] = $name;
                Image::create(array_merge(
                    $formInput,
                    [
                        'product_id' => $product->id,
                        'url' => ($name),
                        'path' => ($name),
                        'default' => 0,
                    ],
                ));
            }
        }

        return response()->json($product, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response()->json($product, 200);
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

    public function showProducts($id, $counter)
    {
        $products = Product::where('category_id', $id)
            ->where('visibility', 1)
            ->orderBy('id', 'asc')
            ->skip($counter)
            ->take(2)
            ->get();
        $images = Image::get();


        return response()->json([$products, $images], 200);
    }
}
