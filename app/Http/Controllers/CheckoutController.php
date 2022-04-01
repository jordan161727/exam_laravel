<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = \Cart::getContent();
        //dd($cartItems);
        return view('checkout', compact('cartItems'));
       
    }


    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            ]);
            $order = new Order;
            $order->firstname = $request->firstname;
            $order->lastname = $request->lastname;
            $order->email = $request->email;
            $order->number = $request->number;
            $order->address = $request->address;
            $order->city = $request->city;
            $order->postcode = $request->postcode;
            $order->notes = $request->notes;
            $order->order_nr = '#'.str_pad($request->id + 1, 8, "0", STR_PAD_LEFT);
            $order->save();
          //  return redirect()->route('product.index')
          return redirect()->route('checkout.show')
          ->with('success','Company has been created successfully.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cartItems = \Cart::getContent();
        return view('orderdetails', compact('cartItems'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
