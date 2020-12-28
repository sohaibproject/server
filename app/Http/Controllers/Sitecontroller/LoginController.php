<?php

namespace App\Http\Controllers\Sitecontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Database\Eloquent\Collection;

class LoginController extends Controller
{
     function saveimage($image,$folder){
        
          $file_extention = $image->getClientOriginalExtension();
          $file_name=time(). '.' .$file_extention;
          $path=$folder;
          $image->move($path,$file_name);
           return $file_name;
      }


    //use LoginRequest;
//     public function editeAdmin(Request $request,$id){

//      // $file_name= $this->saveimage($request->photo,'images');
//      // Admin::create([
//      //      'name'=>  $request->name,
//      //      'email'=>  $request->email,
//      //    //  'photo'=> $file_name,
//      //      'password'=> bcrypt( $request->password),
         
           
                  
//      //       ]);
    
//      $admin=Admin::find($id);

//      if(!$admin)
//          return redirect()->back();
//  // update
//                $admin->name=request('name');
//                $admin->email=request('email');
//                $admin->password= Hash::make(request('password'));

//                $admin->save();
//        // $admin->update($request->all());
            
//           //    return redirect()->back()->with(['succ' =>'your edite is successfuly ']);
 
           
//      return redirect()->back()->with(['success'=>'your insert is sucssesfuly']);


//     }
     public function editeAdmin(Request $request){
   
//dd($request);
        $data=$request->all();
       Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data['password']),'email'=>($data['email']),'name'=>($data['name'])]);

//      $admin = new Admin();
//      $admin -> name =$request->name;
//      $admin -> email =$request->email;         
//      $admin -> password =bcrypt($request->password) ;
//      $admin -> save();
//      $del=Admin::find($id);
// $del->delete();
     return redirect()->back()->with(['success'=>'your insert is sucssesfuly']);
 }


    public function save(){
   

     $admin = new App\Models\Admin();
     $admin -> name ="yasser boudiaf";
     $admin -> email ="Yasserboudiafsoftware@gmail.com";         
     $admin -> password =bcrypt("yasser1998") ;
     $admin -> save();

 }
 public function logout(){

     Auth::guard('admin')->logout();
     // auth()->guard('admin')::logout();
     // Session::forget('admin');
   return redirect('admin/loginAdmin');
 }


    public function getlogin(){

         return view('admin.login');

    }
    public function login(LoginRequest $request){

     $validator = $request->validate([
          'email'     => 'required',
          'password'  => 'required|min:6'
      ]);
     // $admin=Admin::all();
     

      if (auth()->guard('admin')->attempt($validator)) {
          return redirect()->route('admin.dashboard');
      }
      return redirect()->back()->with(['error' => 'Il y a une erreur de données']);
  }




    }
//     public function login(LoginRequest $request){
// //   $remember_me = $request->has('remember_me') ? true : false;
//      // return $request->input();
//      //return "hello";
//      request()->validate([
//           'email' => 'required',
//           'password' => 'required',
//           ]);
//        //   $admin=Admin::all();
  
//           $credentials = $request->only('email', 'password');   //auth()->guard('admin')->
//           if ( auth()->guard('admin')->attempt($credentials)) {
//               // Authentication passed...
           

//      //  if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {
//            // notify()->success('تم الدخول بنجاح  ');
//          //  return redirect()->intended('dashboard');
//         return redirect()->route('admin.dashboard');
//         }
//        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
//         return redirect()->back()->with(['error' => 'Il y a une erreur de données']);
//      // $email=$request->email;
//      // $password=$request->password;

//      // $admin=Admin::select('email','password')->get();

//      // if(($admin->email=$email) && ($admin->password=$password) ){

//      //      return redirect()->route('admin.dashboard');
//      // }
//      // else
//      // {
//      //  return redirect()->back()->with(['error' => 'Il y a une erreur de données']);
//      // } 

// //      //var_dump($credentials);die;
// //     if (auth()->guard('admin')->attempt(['email' => $email, 'password' => $password])) {
// //         // Authentication passed...

// //         return redirect()->route('admin.dashboard');
// //     }
// //     else
// //     {
// //      return redirect()->back()->with(['error' => 'Il y a une erreur de données']);
// //     }    
// }

   



    // public function getmessage(){
    //     return $message =[
    //         'name.required' => 'mest be string',
    //         'name.unique' => 'mest be string',
    //         'price.required' => 'mest be string',
    //         'price.numerice' => 'mest be string',
    //         'details.required' => 'mest be string',
    //     ];  
    //   }
    // public function ruls(){
    
    //   return ['name'=>'required|max:100|unique:offers,name',
    //     'price'=>'required|numeric',
    //     'details'=>'required',
    //    ];}


    

