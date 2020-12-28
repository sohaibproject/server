<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Produit;
use App\Models\Order;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.finshop');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function merci(){
        
        return view('front.merci');


     }
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  $data=$request->all();
    //  dd(Cart::content());
       $order= new Order();
       $order->montant=Cart::total();
       $order->name=request('name');
       $order->mobile=request('mobile');
      
       $produits=[];
       $i=0;
       foreach (Cart::content() as $produit) {
        $produits[''. $i][]= $produit->name;
        $produits[''. $i][]= $produit->price;
        $produits[''. $i][]= $produit->qty;
          
        //    $produits += [ "$i" => $produit->name ];
        //    $produits += [ "produit_$i" => $produit->price ];
        //    $produits += [ "produit_$i" => $produit->qty ];
           $i++;
       }
       $image=[];
       foreach (Cart::content() as $photo) {
       
        $image[''. $i][]= $photo->options['photo'];
        $i++;
       }
       $order->photo= serialize($image);
       $order->produits= serialize($produits);
       $order->save();
        Cart::destroy();
        return redirect()->route('get.merci')->with(['success' =>' votre commende est successed ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
