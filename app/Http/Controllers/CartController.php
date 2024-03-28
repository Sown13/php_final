<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // Retrieve the logged-in user
        $user = Auth::user();

  
        if (!$user) {
  
            return redirect()->route('login');
        }

        // Retrieve the cart for the logged-in user
        // $cart = Cart::where('user_id', $user->user_id)->with('products')->get();


        $products = $user->products;
        // foreach ($products as $product) {
        //     echo $product->product_name; 
        // }
        // Return the cart to the view 
        return view('cart', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $product_id)
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Retrieve the product from the database
        $product = Product::findOrFail($product_id);

        // Check if the user already has the product in the cart
        $existingCart = Cart::where('user_id', $user->user_id)
            ->where('product_id', $product->product_id)
            ->first();

        if ($existingCart) {
            // Increment the quantity if the product is already in the cart
            $existingCart->quantity += 1;
            $existingCart->save();
        } else {
            // Create a new cart entry for the product
            $cart = new Cart();
            $cart->user_id = $user->user_id;
            $cart->product_id = $product->product_id;
            $cart->quantity = 1;
            $cart->save();
        }

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($productId)
    {
        //
        $user = Auth::user();
        $userId = $user->user_id;

        $user->products()->detach($productId);

     


        return redirect()->route('cart.index');
    }
}
