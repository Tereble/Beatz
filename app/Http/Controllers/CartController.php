<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\Song;
use App\Models\License;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'song_id' => 'required|exists:songs,id',
            'license_id' => 'required|exists:licenses,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);
        $song = Song::findOrFail($request->song_id);
        $license = License::findOrFail($request->license_id);

        $cartItem = $cart->items()->updateOrCreate(
            ['song_id' => $song->id, 'license_id' => $license->id],
            ['quantity' => $request->quantity, 'price' => $license->price * $request->quantity]
        );

        return response()->json(['message' => 'Added to cart', 'cartItem' => $cartItem]);
    }

    public function remove(CartItem $cartItem)
    {
        $cartItem->delete();
        return response()->json(['message' => 'Removed from cart']);
    }

    public function show()
    {
        $cart = Cart::with('items.song', 'items.license')->firstOrCreate(['user_id' => auth()->id()]);
        return view('cart.show', compact('cart'));
    }
}
