<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use App\User;
use App\Role;
use Session;
use Image;
use Auth;



class UserController extends Controller
{
    public function index(Request $request){
       $users = User::orderBy('id','desc')->paginate(10);
       return view('users.index',compact('users'));
    }

    public function show($id)
    {
      $user = User::find($id);
      // get previous message id
      $previous = User::where('id', '<', $user->id)->max('id');
      // get next message id
      $next = User::where('id', '>', $user->id)->min('id');
      // return the show view
      return view('users.show')->with('user', $user)->with('previous', $previous)->with('next', $next);;
    }

    public function edit($id)
    {
      $levels = Level::pluck('level','id')->all();
      $roles = Role::pluck('role','id')->all();
      $user = User::find($id);
      return view('users.edit', compact('user', 'levels','roles'));
    }

    public function update(Request $request, $id){
    // Handle the user upload of avatar
      $this->validate($request, array(
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'level_id' => 'required|integer',
        'role_id' => 'required|integer',
        'phone' => 'min:10',
        'class' => 'min:2',
        'avatar'   => 'max:10240|mimes:jpeg,png,gif',
      ));
      //save the data to the database
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level_id = $request->level_id;
        $user->role_id = $request->role_id;
        $user->phone = $request->phone;
        $user->class = $request->class;
        //sava the avatar variable in the database
        if($request->hasFile('avatar')){
          $avatar = $request->file('avatar');
          $filename = time() . '.' . $avatar->getClientOriginalExtension();
          Image::make($avatar)->resize(300, 300)->save( public_path('/images/' . $filename ) );
          //$user = Auth::user();
          $user->avatar = $filename;
          $user->save();
        };
      //end avatar saving
      $user->save();
      //set flash data with success message
      //create a session flash
      Session::flash('success','The user data is updated !');
      return redirect()->route('users.index');
    }

    public function destroy($id){

      $user = User::findOrFail($id);
      if($user->avatar != "default.jpg"){
      unlink(public_path()."/images/".$user->avatar);
      };
      $user->delete();
      Session::flash('success', 'The user was successfully deleted from the database !');
      return redirect()->route('users.index');
    }
}
