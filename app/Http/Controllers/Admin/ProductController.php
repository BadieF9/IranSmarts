<?php

namespace App\Http\Controllers\Admin;

use App\AutomaticGateOpener;
use App\Camera;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends AdminController
{

    public function __construct()
    {
        $this->middleware(['auth', 'checkAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $cameras = Product::all()->where('category','camera');
        $gateOpeners = Product::all()->where('category','automatic-gate-opener');

        return view('Admin.the-products',['cameras' => $cameras, 'gateOpeners' => $gateOpeners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('Admin.add-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(ProductRequest $request)
    {
        $imagesUrl = $this->uploadImages($request->file('images'), 'products');
        $product = Product::create(array_merge($request->all() , [ 'images' => $imagesUrl]));
        if ($request->input('product_type') == 'camera'){
            $product->camera()->create($request->all());
        }
        else {
            $product->automaticGateOpener()->create($request->all());
        }
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return void
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function edit(Product $product)
    {
        return view('Admin.products.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return Application|RedirectResponse|Redirector
     */
    public function update(ProductRequest $request, Product $product)
    {
        $file = $request->file('images');
        $inputs = $request->all();

        if($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'), 'products');
        } else {
            $inputs['images'] = $product->images;
            $inputs['images']['thumb'] = $inputs['imagesThumb'];

        }

        unset($inputs['imagesThumb']);
        $product->update($inputs);

        return redirect(route('products.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Application|RedirectResponse|Redirector
     * @throws Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'));
    }
}
