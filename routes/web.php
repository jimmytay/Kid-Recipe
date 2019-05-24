<?php
use App\Recipe;
use Illuminate\Support\Facades\Input;
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

Route::resource('recipe', 'recipeController');
Route::resource('user', 'userController');
Route::resource('r', 'RegisterController');
Route::resource('admin', 'AdminController');

Route::get('recipe.home','recipeController@index')->name('recipe.home');
Route::get('recipe.superHome','recipeController@introduction')->name('recipe.superHome');
Route::get('recipe.create','recipeController@create');
Route::get('recipe.about','recipeController@about')->name('recipe.about');
//Route::get('recipe.addSnapshot','recipeController@snapshot')->name('recipe.addSnapshot');
Route::get('recipe.show','recipeController@show')->name('recipe.show');
//Route::get('recipe/showById/{id}', 'recipeController@showById')->name('recipe.showById');
Route::get('recipe.showBreakfast', 'recipeController@showBreakfast')->name('recipe.showBreakfast');
Route::get('recipe.showLunch', 'recipeController@showLunch')->name('recipe.showLunch');
Route::get('recipe.showDinner', 'recipeController@showDinner')->name('recipe.showDinner');
Route::get('recipe.showDessert', 'recipeController@showDessert')->name('recipe.showDessert');
Route::get('recipe.bookmark','recipeController@showBookmark')->name('recipe.bookmark');
Route::post('recipe.addBookmark','recipeController@addBookmark')->name('recipe.addBookmark');
Route::get('recipe.importWebsite','recipeController@importWebsite')->name('recipe.importWebsite');
Route::get('user.profile','userController@show')->name('user.profile');
Route::get('user.logout', 'userController@logout');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('recipe/showById/{id}', ['as' => 'recipe.showById', 'uses' => 'recipeController@showById']);
Route::get('recipe/showById2/{id}', ['as' => 'recipe.showById2', 'uses' => 'recipeController@showById2']);
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $recipes = Recipe::where('recipeTitle','LIKE','%'.$q.'%')->orWhere('recipeCategory','LIKE','%'.$q.'%')->get();
    if(count($recipes) > 0)
        return view('search')->with('recipes',$recipes)->withQuery('q',$q);
    else return view ('search')->withMessage('No Details found. Try to search again !');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
