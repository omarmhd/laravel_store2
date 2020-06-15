<?php

    namespace App\Http\Controllers;

    use App\Category;
    use App\Product;
    use Illuminate\Database\Eloquent\ModelNotFoundException;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class ProductController extends Controller
    {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{

        $products=Product::all();

        return view('admin\Products',compact('products'));
    }catch(ModelNotFoundException $exception){
        return back()->with('error',' not  found datat in the (products)  page  ') ;

    }}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
      return view('admin/createProduct',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       $validator=Validator::make($request->all(),[
      'name'=>'required',
       'price'=>'required|numeric',
       'long_description'=>'required',
       'category_id'=>'required',
       'details'=>'required',
       'image'=>'required| mimes:jpeg,png,jpg,gif,svg',
            ])->validate();
      /*  $validator = Validator::make($request->all(), [
            'name'=>'required|unique:products',
            'price'=>'required|numeric',
            'long_description'=>'required',
            'details'=>'required',//1
            'category'=>'required',
            'image'=>'required| mimes:jpeg,png,jpg,gif,svg',
            'detials'=>'required']);*///22
        //   dd( $validator);
        $uplodeimge = $request->file('image');
        $imageName = time() . '.' . $uplodeimge->getClientOriginalExtension();
        $uplodeimge->move('product_images', $imageName);
  try{
          $product= Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'long_description'=>$request->long_description,
            'category_id'=>$request->category_id,
            'image'=>$imageName,
            'detials'=>$request->detials
            ]);


            return redirect()->route('product.index')->with('success','a new product has been added successfully') ;
          }catch(ModelNotFoundException $exception){

            return back()->with('error','error adding a new product') ;

          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show( Product $Product)
    {

    }


    public function edit($id)
    {
        try{
        $product=Product::find($id);
        $categories=Category::all();
        return view('admin\editProduct',compact('product'),compact('categories'));

          }
        catch(ModelNotFoundException $exception){
            return back()->with('error',' not found category '.$id) ;

        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required',
             'price'=>'required|numeric',
             'long_description'=>'required',
             'category'=>'required',
             'details'=>'required',
             'image'=>'required| mimes:jpeg,png,jpg,gif,svg'
          ])->validate();
                $uplodeimge = $request->file('image');
                $imageName = time() . '.' . $uplodeimge->getClientOriginalExtension();
                $uplodeimge->move('product_images', $imageName);

            try{
                $product=Product::where('id',$id)->update([
                'name'=>$request->name,
                'price'=>$request->price,
                'details'=>$request->details,
                'category_id'=>$request->category,
                'long_description'=>$request->long_description,
                'image'=> $imageName

                ]);
                return redirect()->route('product.index')->with('success','success update product') ;
                }
                catch(ModelNotFoundException $exception){

                return back()->with('error','error - not found product') ;

                }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
        public function destroy($id)
        {
            $product=Product::where('id',$id)->delete();

            return  back()->with("success","the product deletion was successful ");
        }
    }
