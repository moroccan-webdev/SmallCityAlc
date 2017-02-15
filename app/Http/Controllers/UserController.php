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
    public function __construct()
    {
        $this->middleware('admin');
        //$this->middleware('log')->only('index');
        //$this->middleware('subscribed')->except('store');
    }

  public function index(Request $request)
    {
       //$user = Auth::user();
       //if($user->isAdmin()){
         $users = User::orderBy('id','desc')->paginate(10);
         return view('users.index',compact('users'));
       //}
    }

    public function create()
    {
        //$levels = Level::pluck('level','id')->all();
        $roles = Role::pluck('role','id')->all();
        return view('users.create',compact('levels','roles'));
    }

    public function store(Request $request)
    {
      $this->validate($request, array(
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'role_id' => 'required|integer',
        'phone' => 'max:10|min:10',
        'password' => 'required|min:6',
        'avatar'   => 'max:10240|mimes:jpeg,png,gif',
        //'level_id' => 'required|integer',
        //'class' => 'min:2',
      ));
      //save the data to the database
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);//bcrypt('password')
        //$user->level_id = $request->level_id;
        //$user->class = $request->class;
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
      Session::flash('success','The user was created successfully !');
      return redirect()->route('users.index');
    }

    public function show($id)
    {
      //$user = Auth::user();
          //if($user->isAdmin()){
          $user = User::find($id);
          // get previous message id
          $previous = User::where('id', '<', $user->id)->max('id');
          // get next message id
          $next = User::where('id', '>', $user->id)->min('id');
          // return the show view
          return view('users.show')->with('user', $user)->with('previous', $previous)->with('next', $next);
          //}
    }

    public function edit($id)
    {
        //$levels = Level::pluck('level','id')->all();
        $roles = Role::pluck('role','id')->all();
        $user = User::find($id);
        return view('users.edit', compact('user','roles'));

    }

    public function update(Request $request, $id){
    // Handle the user upload of avatar
      $this->validate($request, array(
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'role_id' => 'required|integer',
        'phone' => 'max:10|min:10',
        'avatar'   => 'max:10240|mimes:jpeg,png,gif',
        //'level_id' => 'required|integer',
        //'class' => 'min:2',
      ));
      //save the data to the database
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->phone = $request->phone;
        //$user->level_id = $request->level_id;
        //$user->class = $request->class;
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
      //$user = Auth::user();
      //if($user->isAdmin()){
          $user = User::findOrFail($id);
          if($user->avatar != "default.jpg"){
          unlink(public_path()."/images/".$user->avatar);
          };
          $user->delete();
          Session::flash('success', 'The user was successfully deleted from the database !');
          return redirect()->route('users.index');
        //}
      }
}
