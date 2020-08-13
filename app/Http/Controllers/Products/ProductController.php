<?php

namespace App\Http\Controllers\Products;

use App\AutomaticGateOpener;
use App\Camera;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function index(Product $product)
    {
        global $details;
        if($product->category == 'camera'){

            $details = $product->camera()->first();

        } else {

            $details = $product->automaticGateOpener()->first();

        }
        return view('info-products-explaination',['products' => $product,
            'details' => $details]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Product $product
     * @return Response
     */
    public function update(Request $request, Product $product)
    {
        auth()->user()->favorites()->atach($product->id);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        auth()->user()->favorites()->detach($product->id);
        return back();
    }

    public function automaticGateOpener()
    {

        $products = Product::all()->where('category', 'automatic-gate-opener');
        return view('list-products', compact('products'));
    }

    public function camera()
    {
        $products = Product::all()->where('category', 'camera');
        return view('list-products', compact('products'));
    }
}
