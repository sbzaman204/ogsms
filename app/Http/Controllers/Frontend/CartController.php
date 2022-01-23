<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
   public function cartshow()
   {
    $cart = session('cart') ?? [];


    $total = array_sum(array_column($cart, 'sub_total'));
       return view('website.layouts.cart',compact('total'));
   }


    public function addToCart(Request $request,$id)
    {
        // dd($id);

        $product = Product::find($id);
        // dd($product);

        if ($product) {

            $cartData = session()->get('cart');



            // if cart is empty then this the first product
            if (!$cartData) {
                $cart = [
                    $id => [
                        'id' => $product->id,
                        'name' => $product->product_name,
                        'quantity' => $request->product_quantity,
                        'price' => $product->product_price,
                        'image' => $product->product_image,
                        'sub_total' => $product->product_price * $request->product_quantity
                    ]
                ];


                session()->put('cart', $cart);
                return redirect()->back()->with('message', 'Product added to cart successfully!');
            }

            if (isset($cartData[$id])) {

                $cartData[$id]['quantity'] = $cartData[$id]['quantity'] + $request->quantity;
                $cartData[$id]['sub_total'] = $cartData[$id]['quantity'] * $cartData[$id]['price'];

                session()->put('cart', $cartData);
                return redirect()->back()->with('message', 'Product Increment to cart successfully!');
            }

            // if item not exist in cart then add to cart with quantity = 1
            $cartData[$id] = [
                'id' => $product->id,
                        'name' => $product->product_name,
                        'quantity' => $request->product_quantity,
                        'price' => $product->product_price,
                        'image' => $product->product_image,
                        'sub_total' => $product->product_price * $request->product_quantity

            ];

            session()->put('cart', $cartData);
            return redirect()->back()->with('message', 'Product added to cart successfully!');
        } else {
            return redirect()->back()->with('message', 'no product found');
        }

    }

    public function CartRemove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->back()->with('message', 'Product Deleted into cart successfully!');
        }
    }


    public function CartUpdate(Request $request)
    {

        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            $cart[$request->id]['sub_total'] = $cart[$request->id]['quantity'] * $cart[$request->id]['price'];
            session()->put('cart', $cart);


            return redirect()->back()->with('message', 'Product Updated into cart successfully!');
        }
    }
    public function getCart()
    {
       $carts= session()->get('cart');
        return view('website.cart',compact('carts'));
    }

    


}
