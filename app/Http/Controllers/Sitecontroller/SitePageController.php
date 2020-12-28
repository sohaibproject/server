<?php

namespace App\Http\Controllers\Sitecontroller;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Customer;
use App\Models\Admin;
use App\Models\Client;
use App\Notifications\AdminNotification;
class SitePageController extends Controller
{
public function getsite(){
      
   // $admin=Admin::all()->notify(new AdminNotification);
  
    $produit=Produit::all()
    ->where('vedatte','oui');

    $produit_recent=Produit::all()
    ->where('vedatte','no');
    
    $categorie=Categorie::all();

    $opinion=Customer::all();

    return view('front.home',compact('produit','categorie','produit_recent','opinion'));



}
public function getproduitcategorie($id){
    $categorie=Categorie::find($id);
    $produitcategorie=$categorie->products;
    
    $cat=Categorie::all();
  
  return view('front.listProduct',compact('produitcategorie','cat'));



}
public function getproduitdetail($id){
    $produit=Produit::find($id);
    $cat=Categorie::all();
    return view('front.detailProduct',compact('produit','cat'));
    


}
    public function storclient(Request $request){
        $client = new client();
        $client ->name=request('name');
        $client ->email=request('email');
        $client ->discription=request('discription');
        $client ->save();
        // client::create([
        //     'email'=>$request->email,
        //         'name'=> $request->name,
        //         'discription'=>  $request->description,
        //    ]); 
        //    $admin=Admin::all();
        //    Notification::send($admin, new AdminNotification($client));
     return redirect()->back();
        


    }

   
}
