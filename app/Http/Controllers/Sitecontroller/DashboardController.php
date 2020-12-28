<?php

namespace App\Http\Controllers\Sitecontroller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\Customer;
use App\Models\Client;
use App\Models\Order;
class DashboardController extends Controller
{






    public function index(){

       $client=Client::all();
       $order=Order::all();
        return view('admin.dashboard',compact('client','order'));
    }
    public function getallProduit(){
        $client=Client::all();
        $order=Order::all();
        // $produit=Produit::all();
        $produit=Produit::with(['Categorie'=>function($q){
            $q->select('id','name');
           }
          ])->paginate(5);

        return view('admin.allProduit',compact('produit','client','order'));
    }
    public function getcategorie(){
        $client=Client::all();
        $order=Order::all();
       $categorie=Categorie::select('id','name','photo')->paginate(5);
        return view('admin.allcategorie',compact('categorie','client','order'));
    } 
    public function getprofile(){
        $client=Client::all();
        $order=Order::all();

    $admin = Admin::select('id','name','email','password')->get();

        return view('admin.profile',compact('admin','client','order'));
    } 



   public function addProduit(){
    $client=Client::all();
    $order=Order::all();
    $categorie=Categorie::all();
    return view('admin.addProduit',compact('categorie','client','order'));
   }
   ########################## save image####################################################
   function saveimage($image,$folder){
        
    $file_extention = $image->getClientOriginalExtension();
    $file_name=time(). '.' .$file_extention;
    $path=$folder;
    $image->move($path,$file_name);
     return $file_name;
}
##############################################################################
   public function storProduit(Request $request){
      
  
    
        $pathimage=request()->file('photo')->store('public');
       
    
        

    // $file_name= $this->saveimage($request->photo,'images/imageProduit');
   
    //  return "okay";
  
          Produit::create([
              'photo'=> str_replace('public/','',$pathimage),
                   'details'=> $request->details,
                  'name'=>  $request->name,
                  'vedatte'=> $request->vedatte,
               'price'=>  $request->price,
               'categorie_id'=>$request->categotieId,
                      
               ]);
               
         return redirect()->back()->with(['success'=>'votre insertion est réussie']);

   }
  public function editeProduit($id){
    
      $produit=Produit::find($id);
     
      if(!$produit)
      return redirect()->back();

      $produit=Produit::select('id','name','price','details','photo','vedatte')->find($id);
     
     $categorie=Categorie::all();
     $client=Client::all();
     $order=Order::all();
        return view('admin.editeProduit',compact('produit','categorie','client','order'));

  }
     public function update(Request $request, $id){

         $produit=Produit::find($id);

        // if(!$produit)
        if(request()->file('photo')){

         $newpathimage=request()->file('photo')->store('public');
         $produit->photo= str_replace('public/','',$newpathimage);
        }
      
        $produit->vedatte=request('vedatte');
        $produit->name=request('name');
        $produit->price=request('price');
        $produit->details=request('details');
        $produit->categorie_id=request('categotieId');

        $produit->save();


      //      return redirect()->back();
    // update
            // $produit->update($request->all());
               
         return redirect()->back()->with(['success' =>'votre insertion est réussie ']);



     }
    public function deleteProduit($id){

        $produit= Produit::find($id);
        if(!$produit)
        return redirect()->back()->with(['error' => 'votre produit ne pas exisit']);
      $produit->delete();
         return redirect()->route('get.allProduit')->with(['success'=>'est suprimer']);

    }

    public function addcategorie(){
        $client=Client::all();
     $order=Order::all();
        return view('admin.addcategorie',compact('client','order'));
    }

    public function storcategorie(Request $request){
        $pathimageCat=request()->file('photo')->store('public');
         if( $request->name){
        Categorie::create([
            'photo'=> str_replace('public/','',$pathimageCat),
                'name'=>  $request->name,
           ]);
             
       return redirect()->back()->with(['success'=>'votre insertion est réussie']);}

       else{

        return redirect()->back()->with(['error' => 'pas d insersion']);
       }



    }

    public function editecategorie($id){
        
        $categorie=Categorie::find($id);
        
      if(!$categorie)
      return redirect()->back();
      $client=Client::all();
      $order=Order::all();
      $categorie=Categorie::select('id','name','photo')->find($id);
        return view('admin.editecategorie',compact('categorie','client','order'));


    }
   public function deletecategorie($id){  

   $categorie= Categorie::find($id);
   if(!$categorie)
   return redirect()->back()->with(['error' => 'votre categorie ne pas exisit']);
   $categorie->products()->delete();
 $categorie->delete();
    return redirect()->route('get.categorie')->with(['success'=>'est suprimer']);

   }

public function updatecategorie(Request $request,$id){


    $categorie=Categorie::find($id);

    if(request()->file('photo')){

        $newpathimagecat=request()->file('photo')->store('public');
        $categorie->photo= str_replace('public/','',$newpathimagecat);
       }
       $categorie->name=request('name');
       $categorie->save();

      return redirect()->back()->with(['success'=>'votre insertion est réussie']);
    // // update
    //      $categorie->update($request->all());
    //      return redirect()->back()->with(['success'=>'votre insertion est réussie']);
}
#########################################  opinion ###########################################################
     public function getclienOpinion(){
    $opinion=Customer::all();
    $client=Client::all();
      $order=Order::all();
        return view('admin.allopinion',compact('opinion','client','order'));

     }
     public function addopinion(){
        $client=Client::all();
        $order=Order::all();
     return view('admin.addclientopinion',compact('client','order'));

     }
     public function storopinion(Request $request){
        $pathimageCat=request()->file('photo')->store('public');
        if( $request->name){
       Customer::create([
           'photo'=> str_replace('public/','',$pathimageCat),
               'name'=>  $request->name,
               'description'=>  $request->description,
          ]);
            
      return redirect()->back()->with(['success'=>'votre insertion est réussie']);}

      else{

       return redirect()->back()->with(['error' => 'pas d insersion']);
      }





    }
    public function editeopinion($id){
  
        $opinion=Customer::find($id);
        
      if(!$opinion)
      return redirect()->back();

      $opinion=Customer::select('id','name','photo','description')->find($id);
      $client=Client::all();
      $order=Order::all();
        return view('admin.editeopinion',compact('opinion','client','order'));
    }
    public function updateopinion(Request $request,$id){


        $customer=Customer::find($id);
  
        if(request()->file('photo')){

            $newpathimagecat=request()->file('photo')->store('public');
            $customer->photo= str_replace('public/','',$newpathimagecat);
           }
           $customer->name=request('name');
           $customer->description=request('description');
           $customer->save();
    
          return redirect()->back()->with(['success'=>'votre insertion est réussie']);
    }
    public function deleteopinion($id){
        $customer=Customer::find($id);
        if(!$customer)
        return redirect()->back()->with(['error' => 'votre client ne pas exisit']);
      
      $customer->delete();
         return redirect()->route('get.opinion')->with(['success'=>'est suprimer']);
     

    }

##############################################################################################################
   public function getclient(){
    $order=Order::all();
    $client=Client::all();
    return view('admin.client',compact('client','order'));
   }


   public function getorder(){
    $order=Order::all();
    $client=Client::all();
    $order->transform(function($order,$key){

       $order->produits=unserialize($order->produits);
       $order->photo=unserialize($order->photo);
       return  $order;
    });
  // dd($order);
     return view('admin.orders',compact('client','order'));

   }
   public function deleteorder($id){

    $order=Order::find($id);
    $order->delete();
    return redirect()->back()->with(['success'=>'votre commende  est supprimer']);
   }
   public function deleteclient($id){

    $client=Client::find($id);
    $client->delete();
    return redirect()->back()->with(['success'=>' Évaluation  est supprimer']);
   }
   public function searchproduit(){
    $cat=Categorie::all();
$q=request()->input('query');
  $produits=Produit::where('name','like',"%$q%")
  ->orWhere('details','like',"%$q%")
  ->paginate(3);
  return view('front.searchProduct',compact('produits','cat'));
//dd($q);


   }
}
