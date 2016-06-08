<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Events\CheckoutEvent;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Session;
use CodeCommerce\Order;
use CodeCommerce\OrderItem;
use Auth;

class CheckoutController extends Controller
{
    public function place(Order $orderModel, OrderItem $cart)
    {
        if (!Session::has('cart')) {
            return false;
        }

        $cart = Session::get('cart');

        if ($cart->getTotal() > 0) {

            $order = $orderModel->create([
                'user_id' => Auth::user()->id,
                'total' => $cart->getTotal(),
                'status_id' => 2
            ]);

            foreach ($cart->all() as $k => $item) {
                $item = [
                    'product_id'=>$k,
                    'price'=>$item['price'],
                    'quantity'=>$item['qtd']
                ];
                $order->items()->create($item);
            }

            $cart->clear();

            event(new CheckoutEvent($order));

            return view('store.checkout', compact('order'));
        }


        
        return view('store.checkout');
    }
}
