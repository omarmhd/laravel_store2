<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
       // return Product::select('name','price')->get;

      /*- $products=Product::all();
       return response([
        'status'=>'success',
        'data'=>$products]);
*/
return ProductResource::collection(Product::all());

    }




    public function store(Request $request)
    {
       $product= Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'long_description'=>$request->long_description,
            'category_id'=>$request->category_id,
            'image'=>$request->image,
            'detials'=>$request->detials,
            ]);


        return response([
            'status'=>'success',
            'data'=>$product


        ]       );
    }


    public function show(Product $product)
    {
        return new ProductResource($product);
    }





    public function update(Request $request, Product $product)
    {

        Product::where('id', $product->id)->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'details'=>$request->details,
            'category_id'=>$request->category_id,

            'long_description'=>$request->long_description,
             'image'=> $request->image

            ]);


          return response([
              'status'=>'success',
              'data'=>$product
              ])
    ;
          }

    public function destroy(Product $product)
    {

   $product->delete;
   return  response([

    'status'=>'success',
    'data'=>$product   ]);

    }
}
