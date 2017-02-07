<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Shower;
use App\Level;
use Session;
use Storage;
use Image;
use Auth;

class ShowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $levels = Level::pluck('level','id')->all();
      $showers = Shower::orderBy('id','desc')->paginate(11);
      return view('showers.index',compact('showers','levels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::pluck('level','id')->all();
        //$levels = Level::lists('title', 'id');
        //$levelsCollect = collect($levels);
        //dd($levels);
        return view('showers.index',compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request->level_id);
      $this->validate($request, array(
      'name'           => 'Required|min:4|max:255',
      'email'          => 'Required|email',
      'level_id'       => 'Required',
      'stars'          => 'Required|min:1|max:1',
      'class'          => 'Required|min:3',
      'teacher'        => 'Required|min:1|max:30',
      'phone'        => 'Required|min:1|max:30',
      'image'          => 'max:10240|mimes:jpeg,png,gif',
    ));
    //save the data to the database
      $shower = new shower;
      $shower->name       = $request->name;
      $shower->email      = $request->email;
      $shower->level_id   = $request->level_id;
      $shower->stars      = $request->stars;
      $shower->class      = $request->class;
      $shower->phone      = $request->phone;
      $shower->teacher      = $request->teacher;
      //sava the avatar variable in the database
      if($request->hasFile('image')){
        $avatar = $request->file('image');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/images/' . $filename ) );
        //$user = Auth::user();
        $shower->image = $filename;
        $shower->save();
      };
      //end avatar saving
      $shower->save();
      //set flash data with success message
      Session::flash('success', 'The student was successfully saved to the database !');
      return redirect()->route('showers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //find the desired post
      $shower = Shower::find($id);
      // get previous message id
      $previous = Shower::where('id', '<', $shower->id)->max('id');
      // get next message id
      $next = Shower::where('id', '>', $shower->id)->min('id');
      // return the show view
      return view('showers.show',compact('shower','previous','next'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $levels = Level::pluck('level','id')->all();
      $shower = Shower::findOrFail($id);
      return view('showers.edit', compact('shower', 'levels'));
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
      //dd($request->level_id);
      $this->validate($request, array(
      'name'           => 'Required|min:4|max:255',
      'email'          => 'Required|email',
      'level_id'       => 'Required',
      'stars'          => 'Required|min:1|max:1',
      'class'          => 'Required|min:3',
      'teacher'        => 'Required|min:1|max:30',
      'phone'        => 'Required|min:1|max:30',
      'image'          => 'max:10240|mimes:jpeg,png,gif',
    ));
    //save the data to the database
      $shower = Shower::findOrFail($id);
      $shower->name       = $request->name;
      $shower->email      = $request->email;
      $shower->level_id   = $request->level_id;
      $shower->stars      = $request->stars;
      $shower->class      = $request->class;
      $shower->phone      = $request->phone;
      $shower->teacher      = $request->teacher;
      //sava the avatar variable in the database
      if($request->hasFile('image')){
        $avatar = $request->file('image');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/images/' . $filename ));
        //$user = Auth::user();
        $shower->image = $filename;
        $shower->save();
      };
      //end avatar saving
      $shower->save();
      //set flash data with success message
      Session::flash('success', 'The student was successfully updated !');
      return redirect()->route('showers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $shower = Shower::findOrFail($id);
      if($shower->image != "default.jpg" && $shower->image != "default.png" ){
      unlink(public_path()."/images/".$shower->image);
      };
      $shower->delete();
      Session::flash('success', 'The student was successfully deleted from the database !');
      return redirect()->route('showers.index');
    }
}
