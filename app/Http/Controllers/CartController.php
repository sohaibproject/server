<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Produit;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('front.panier');
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
        // dd($request->id,$request->name,$request->price);
        //dd(Cart::content());
        

       $dublicate=Cart::search(function ($cartItem, $rowId) use($request) {
            return $cartItem->id === $request->id;
        });

        if($dublicate->isNotEmpty()){
            return redirect()->route('get.site')->with(['success' =>' le produit a deja ete ajouter ']);
        }
        $produit=Produit::find($request->id);
        Cart::add($request->id, $produit->name,$request->qty,$produit->price,['photo' =>$produit->photo ])
        ->associate('App\Models\Produit');
        //dd(Cart::content());
       return redirect()->route('get.site')->with(['success' =>' le produit a bien ete ajouter ']);
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
    public function update(Request $request, $rowId)
    {
        $rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
        Cart::update($rowId, 2);
        //       Cart::update($rowId, $request->qty); 
         Session()->flash('success_message','the auentity is updated');             
        return response()->json(['success'=>true]);      
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);
         return redirect()->back()->with(['success' =>' le produit a  ete supprimer ']);
         
    }
}
