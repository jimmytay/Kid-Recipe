<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Bookmark;
use App\RecipePhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;

class recipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $recipes = [];
      $recipes = Recipe::all();
      if (Auth::check() && Auth::user()->isAdmin()) {
       return view('admin')->with('recipes',$recipes);
     } else {
       return view('recipe.home')->with('recipes',$recipes);

     }

    }

    public function introduction()
    {
      $recipes = [];
      $recipes = Recipe::all();
      return view('recipe.superHome')->with('recipes',$recipes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipe.create');
    }

    public function about()
    {
        return view('recipe.about');
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
        'recipeTitle' => 'required',
        'recipeCategory' => 'required',
        'description' => 'required',
        'author' => 'required',
        'ingredient' => 'required',
        'ingredientTwo' => 'required',
        'steps' => 'required',
        'timeEstimate' => 'required',
        'nutritionFact' => 'required',
      ]);



      $recipes = new Recipe;
      $recipes->recipeTitle = $request->recipeTitle;
      $recipes->recipeCategory = $request->recipeCategory;
      $recipes->description = $request->description;
      $recipes->author = $request->author;
      $recipes->ingredient = $request->ingredient;
        $recipes->ingredientTwo = $request->ingredientTwo;
      $recipes->steps = $request->steps;
      $recipes->timeEstimate = $request->timeEstimate;
      $recipes->nutritionFact = $request->nutritionFact;

      $recipeImage = $request->file('imageUpload');
      $pathName = "";
      $array= array();
      $path = "";
      $imgs = array();
      if($request->file('imageUpload')){
        foreach($request->file('imageUpload') as $recipeImage){
          $extension = $recipeImage->getClientOriginalExtension();
          Storage::disk('public')->put($recipeImage->getFilename().'.'.$extension,  File::get($recipeImage));
            $pathname = $recipeImage->getFilename().'.'.$extension;
            $array[] = $pathname;
            $path = implode(',',$array);
          $recipes->imageUpload = $path;
        }
      }

      $recipes->save();

      if (Auth::check() && Auth::user()->isAdmin()) {
       return redirect('admin')->with('recipes',$recipes);
     } else {
       return redirect('recipe.home')->with('recipes',$recipes);
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $recipes = Recipe::all();
       return view('recipe.show')->with('recipes',$recipes);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showById($id)
    {
      //$recipes = Recipe::where('id',$id)->first();
    //return view('recipe.showById', compact('recipes'));
    $recipes = Recipe::find($id);
  return view('recipe.showById', compact('recipes'));

}

public function showById2($id)
{
  //$recipes = Recipe::where('id',$id)->first();
//return view('recipe.showById', compact('recipes'));
$recipes = Recipe::find($id);
return view('recipe.showById2', compact('recipes'));

}

    public function showBreakfast(){

      $recipes = Recipe::where('recipeCategory', '=', 'Breakfast')->get();
      return view('recipe.showBreakfast', compact('recipes'));
    }

    public function showLunch(){

      $recipes = Recipe::where('recipeCategory', '=', 'Lunch')->get();
      return view('recipe.showLunch', compact('recipes'));
    }

    public function showDinner(){

      $recipes = Recipe::where('recipeCategory', '=', 'Dinner')->get();
      return view('recipe.showDinner', compact('recipes'));
    }

    public function showDessert(){

      $recipes = Recipe::where('recipeCategory', '=', 'Dessert')->get();
      return view('recipe.showDessert', compact('recipes'));
    }

    /*public function search($q){
      $q = Input::get ( 'q' );
      $recipes = Recipe::where('recipeTitle','LIKE','%'.$q.'%')->orWhere('recipeCategory','LIKE','%'.$q.'%')->get();
      if(count($recipes) > 0)
          return view('recipe/search')->withDetails($recipes)->withQuery ( $q );
      else return view ('recipe/search')->withMessage('No Details found. Try to search again !');
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $recipes = Recipe::find($id);
      return view('recipe.edit',compact('recipes','id'));
    }

    public function showBookmark()
    {
      $userID=Auth::user()->id;
      $recipes = DB::table('bookmark')->join('recipes','recipes.id','=','bookmark.recipe_id')->join('users','users.id','=','bookmark.user_id')->where('bookmark.user_id',$userID)->get();
    return view('recipe.bookmark',compact('recipes'));
    }

    public function addBookmark(Request $request)
    {
      $bookmark = new Bookmark;
      $bookmark->user_id=Auth::user()->id;
      $bookmark->recipe_id=$request->recipe_id;
      $bookmark->save();
      $recipes = DB::table('recipes')->where('id',$request->recipe_id)->get();

      return view('recipe.bookmark',compact('recipes'))->with('success', "Congrat Little Chef, bookmark added!");
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
      if (Auth::check() && Auth::user()->isAdmin()) {
        $recipes = Recipe::find($id);

        $recipes->recipeTitle = $request->recipeTitle;
        $recipes->recipeCategory = $request->recipeCategory;
        $recipes->description = $request->description;
        $recipes->author = $request->author;
        $recipes->ingredient = $request->ingredient;
          $recipes->ingredientTwo = $request->ingredientTwo;
        $recipes->steps = $request->steps;
        $recipes->timeEstimate = $request->timeEstimate;
        $recipes->nutritionFact = $request->nutritionFact;
        /*$recipeImage = $request->file('imageUpload');
        if($request->file('imageUpload')){
          foreach($request->file('imageUpload') as $recipeImage){
            $extension = $recipeImage->getClientOriginalExtension();
            Storage::disk('public')->put($recipeImage->getFilename().'.'.$extension,  File::get($recipeImage));
            $recipes->imageUpload = $recipeImage->getFilename().'.'.$extension;
          }
        }*/
        $recipeImage = $request->file('imageUpload');
        $pathName = "";
        $array= array();
        $path = "";
        if($request->file('imageUpload')){
          foreach($request->file('imageUpload') as $recipeImage){
            $extension = $recipeImage->getClientOriginalExtension();
            Storage::disk('public')->put($recipeImage->getFilename().'.'.$extension,  File::get($recipeImage));
              $pathname = $recipeImage->getFilename().'.'.$extension;
              $array[] = $pathname;
              $path = implode(',',$array);
            $recipes->imageUpload = $path;
          }
        }
        $recipes->save();
        return redirect('admin')->with('recipes',$recipes);
     } else {
       $recipes = Recipe::find($id);

       $recipeImage = $request->file('imageUpload');
       $pathName = "";
       $array= array();
       $path = "";
       if($request->file('imageUpload')){
         foreach($request->file('imageUpload') as $recipeImage){
           $extension = $recipeImage->getClientOriginalExtension();
           Storage::disk('public')->put($recipeImage->getFilename().'.'.$extension,  File::get($recipeImage));
             $pathname = $recipeImage->getFilename().'.'.$extension;
             $array[] = $pathname;
             $path = implode(',',$array);
           $recipes->imageUpload = $path;
         }
       }
       $recipes->save();
         return redirect('recipe.home')->with('recipes',$recipes);
     }



    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $recipes = Recipe::find($id);
      $recipes->delete();

      return redirect('recipe.show');
    }
}
