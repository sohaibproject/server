 <?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//       return view('front.home');
//       })->name('homePage');
      Route::group(['namespace'=>'Sitecontroller'], function () {
        Route::get('/','SitePageController@getsite')->name('get.site');
        Route::get('getproduitcategorie/{id}','SitePageController@getproduitcategorie');
        Route::get('getproduitdetail/{id}','SitePageController@getproduitdetail');
        Route::post('storclient','SitePageController@storclient')->name('storclient');
        Route::get('search','DashboardController@searchproduit')->name('produit.search');

    });


Route::group(['namespace'=>'Sitecontroller','middleware'=>'auth:admin'], function () {
    Route::get('/admin','DashboardController@index')->name('admin.dashboard');
});




Route::group(['namespace'=>'Sitecontroller','middleware'=>'guest:admin'], function () {

    Route::get('loginAdmin','LoginController@getlogin')->name('get.admin.login');
    Route::post('loginadmin','LoginController@login')->name('login.post');
});
Route::get('test', function () {
    
})->name('test');
####################################### Begin traigil dashboard ###########################################################################
Route::group(['namespace'=>'Sitecontroller','middleware'=>'auth:admin'], function () {

    Route::get('allProduit','DashboardController@getallProduit')->name('get.allProduit');
    Route::get('addProduit','DashboardController@addProduit')->name('add.produit');
    Route::post('storProduit','DashboardController@storProduit')->name('produit.stor');
  
    Route::get('editeProduit/{id}','DashboardController@editeProduit')->name('edite.produit');
    Route::post('/update/{id}','DashboardController@update')->name('produit.update');
    Route::get('deleteProduit/{id}','DashboardController@deleteProduit')->name('produit.delete');
#################################### begin categorie#######################################
Route::get('categorie','DashboardController@getcategorie')->name('get.categorie');
Route::get('addcategorie','DashboardController@addcategorie')->name('add.categorie');
Route::post('storcategorie','DashboardController@storcategorie')->name('stor.categorie');
Route::get('editecategorie/{id}','DashboardController@editecategorie')->name('edite.categorie');
Route::post('/updatecategorie/{id}','DashboardController@updatecategorie')->name('categorie.update');
Route::get('deletecategorie/{id}','DashboardController@deletecategorie')->name('categorie.delete');

#################################### end categorie#######################################
Route::get('profile','DashboardController@getprofile')->name('get.profile');
Route::post('editeAdmin','LoginController@editeAdmin')->name('edit.admin');
Route::post('logoutAdmin','LoginController@logout')->name('logout.admin');

#################################### end categorie#######################################

#################################### Begin clienopinion #################################
Route::get('clienOpinion','DashboardController@getclienOpinion')->name('get.opinion');
Route::get('addopinion','DashboardController@addopinion')->name('add.opinion');
Route::post('storopinion','DashboardController@storopinion')->name('stor.opinion');
Route::get('editeopinion/{id}','DashboardController@editeopinion')->name('edite.opinion');
Route::post('/updateopinion/{id}','DashboardController@updateopinion')->name('opinion.update');
Route::get('deleteopinion/{id}','DashboardController@deleteopinion')->name('opinion.delete');
Route::get('getclient','DashboardController@getclient')->name('get.client');
Route::get('getorder','DashboardController@getorder')->name('get.order');
Route::get('deleteorder/{id}','DashboardController@deleteorder')->name('order.delete');
Route::get('deleteclient/{id}','DashboardController@deleteclient')->name('client.delete');

#################################### end clienopinion #######################################

});
######################################## end traigil dashboard################################################
######################################## Begin  panier#########################################################

Route::post('ajouterpanie','CartController@store')->name('cart.stor');

Route::get('videPanier', function () {
    Cart::destroy();
    
});
Route::get('panie','CartController@index')->name('cart.index');
Route::post('supprimerpanie/{rowId}','CartController@destroy')->name('cart.destroy');
// Route::patch('panier/{rowId}','CartController@update')->name('cart.update');
Route::get('finshop','CheckoutController@index')->name('cart.finshop');
Route::post('finstor','CheckoutController@store')->name('cart.finstor');
Route::get('merci','CheckoutController@merci')->name('get.merci');
######################################## end   panier#########################################################

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

