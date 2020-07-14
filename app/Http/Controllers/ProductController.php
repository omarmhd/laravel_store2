<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Flash;
// use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Response;
use File;
class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if (Gate::allows('admin')) {
            $products = $this->productRepository->all();
        } else {
            $products = $this->productRepository->all(['user_id' => auth()->user()->id]);
            // dd($products);
        }
        // $products = $this->productRepository->all(['user_id' => auth()->user()->id]);
        // dd($products);
        return view('backend.products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create(CategoryRepository $categoryRepo)
    {
        $categories = $categoryRepo->all();
        return view('backend.products.create',compact('categories'));
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        $name = request('image')->getClientOriginalName();
        $name = time() .uniqid(). '_' . $name;
        request('image')->move(public_path() . '/product_images/', $name);
        $input['image'] = $name;
        $product = $this->productRepository->create($input);
        
        Flash::success('تم اضافة المنتج بنجاح.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        return redirect(route('products.index'));
    //     $product = $this->productRepository->find($id);

    //     if (empty($product)) {
    //         Flash::error('المنتج غير متوفر');

    //         return redirect(route('products.index'));
    //     }
    //     if (!Gate::allows('show-product',$product)) {
    //         abort(403, 'unauthorized access to delete user');
    // }
    //     return view('backend.products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(CategoryRepository $categoryRepo,$id)
    {
        // $product = $this->productRepository->find($id);
        // dd(Gate::allows('edit-product',$product));
     
        $product = $this->productRepository->find($id);
  
        $categories = $categoryRepo->all();
        if (empty($product)) {
            Flash::error('المنتج غير متوفر');
            return redirect(route('products.index'));
        }
        if (!Gate::allows('edit-product',$product)) {
                abort(403, 'unauthorized access to delete user');
        }
        return view('backend.products.edit')->with(['product'=> $product,'categories'=>$categories]);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('المنتج غير متوفر');
            return redirect(route('products.index'));
        }
        if (!Gate::allows('edit-product',$product)) {
            abort(403, 'unauthorized access to delete user');
        }
        $input = $request->all();
        File::delete("product_images/$product->image");
        $name = request('image')->getClientOriginalName();
        $name = time() .uniqid(). '_' . $name;
        request('image')->move(public_path() . '/product_images/', $name);
        $input['image'] = $name;
        // dd($input);

        $product = $this->productRepository->update($input, $id);

        Flash::success('تم تعديل المنتج بنجاح.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('المنتج غير متوفر');

            return redirect(route('products.index'));
        }
        if (!Gate::allows('edit-product',$product)) {
            abort(403, 'unauthorized access to delete user');
        }
        $this->productRepository->delete($id);

        Flash::success('تم حذف المنتج بنجاح.');

        return redirect(route('products.index'));
    }
}
