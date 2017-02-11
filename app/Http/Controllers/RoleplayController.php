<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roleplay;
use App\User;
use App\Level;
use Session;
use Auth;

class RoleplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $roleplays = Roleplay::orderBy('id','desc')->paginate(10);
      return view('roleplays.index',compact('roleplays'));
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
      return view('roleplays.create',compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array(
      'name'      => 'Required|min:4|max:255',
      'city'      => 'Required|min:3|max:255',
      'center'    => 'Required|min:3|max:255',
      'level_id'  => 'Required',
      'body'      => 'Required|min:3',
    ));
    //save the data to the database
      $roleplay = new roleplay;
      $roleplay->name      = $request->name;
      $roleplay->city      = $request->city;
      $roleplay->center    = $request->center;
      $roleplay->level_id  = $request->level_id;
      $roleplay->body      = $request->body;
      $roleplay->save();
      //set flash data with success message
      Session::flash('success', 'The roleplay was successfully saved to the database !');
      return redirect()->route('roleplays.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //find the desired RP
      $roleplay = Roleplay::find($id);
      // get previous RP id
      $previous = Roleplay::where('id', '<', $roleplay->id)->max('id');
      // get next RP id
      $next = Roleplay::where('id', '>', $roleplay->id)->min('id');
      // return the show view
      return view('roleplays.show',compact('roleplay','previous','next'));
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
      $roleplay = Roleplay::findOrFail($id);
      return view('roleplays.edit', compact('roleplay', 'levels'));
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
      $this->validate($request, array(
      'name'      => 'Required|min:4|max:255',
      'city'      => 'Required|min:3|max:255',
      'center'    => 'Required|min:3|max:255',
      'level_id'  => 'Required',
      'body'      => 'Required|min:3',
    ));
    //save the data to the database
      $roleplay = Roleplay::find($id);
      $roleplay->name      = $request->name;
      $roleplay->city      = $request->city;
      $roleplay->center    = $request->center;
      $roleplay->level_id  = $request->level_id;
      $roleplay->body      = $request->body;
      $roleplay->save();
      //set flash data with success message
      Session::flash('success', 'The roleplay was successfully updated !');
      return redirect()->route('roleplays.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $roleplay = Roleplay::find($id);
      $roleplay->delete();
      Session::flash('success', 'The roleplay was successfully deleted from the database !');
      return redirect()->route('roleplays.index');
    }
}
