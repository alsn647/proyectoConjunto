<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $formInput=$request->all();
        $images=array();

        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->category()->associate(Category::findOrFail($request->get('category')));
        $product->price = $request->get('price');
        $product->tax = $request->get('taxes');
        $product->discount = $request->get('discount');
        $product->stock = $request->get('stock');
        $product->save();
//subir esto arriba a ver si funca
//migraciones nuevas para ponerle visibilidad a la tabla products
        if($files=$request->file('images')){
            foreach($files as $file){
                $name=$file->hashName();
                $file->move('images',$name);
                $images[]=$name;
                Image::create(array_merge($formInput,
                [
                    'product_id' => $product -> id,
                    'url' => ($name),
                    'path' => ($name),
                    'default' => 0,
                    ],
                ));
            }
        }

        // Codigo anterior
        /* $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->category()->associate(Category::findOrFail($request->get('category')));
        $product->price = $request->get('price');
        $product->tax = $request->get('taxes');
        $product->discount = $request->get('discount');
        $product->stock = $request->get('stock');
        $product->save(); */

        return view('products.guardado', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Product::all();
        return view('products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $formInput=$request->all();
        $images=array();



        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->category()->associate(Category::findOrFail($request->get('category')));
        $product->price = $request->get('price');
        $product->discount = $request->get('discount');
        $product->tax = $request->get('taxes');
        $product->stock = $request->get('stock');
        $product->save();



         if($files=$request->file('images')){
            foreach($files as $file){
                $name=$file->hashName();
                $file->move('images',$name);
                $images[]=$name;
                Image::create(array_merge($formInput,
                [
                    'product_id' => $product -> id,
                    'url' => ($name),
                    'path' => ($name),
                    'default' => 0,
                ],
                ));
            }
        }


        return view('products.modificado', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
