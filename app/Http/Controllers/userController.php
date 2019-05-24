<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Session;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = [];
        $users = User::all();
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
      $this->validate(request(), [
           'name' => 'required',
           'age' => 'required',
           'gendar' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required|min:6|confirmed'
       ]);
      $users = new User;

      $users->name = $request->name;
      $users->age = $request->age;
      $users->gendar = $request->gendar;
      $users->email = $request->email;
      $users->password = bcrypt($request->password);

      $users->save();
      return redirect('recipe.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $users = new user;
        return view('user.profile')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('user.edit',compact('users','id'));
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

    $users = User::find($id);

    $users->name = $request->name;
    $users->age = $request->age;
    $users->gendar = $request->gendar;
    $users->email = $request->email;
  



      $users->save();
      return redirect('user.profile')->with('users',$users);
    }

    public function logout(){
      Session::flush();
      Auth::logout();
      return redirect('login');
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
