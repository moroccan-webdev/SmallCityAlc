<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slot;
use App\User;
use App\Role;
use Session;
use Auth;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $slots = Slot::orderBy('id','desc')->paginate(10);
      return view('slots.index',compact('slots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slots.create');
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
      'daterange' => 'Required|min:10|max:60',
      ));
    //save the data to the database
      $slot = new slot;
      $slot->daterange = $request->daterange;
      $slot->save();
      //set flash data with success message
      Session::flash('success', 'The slot was successfully saved to the database !');
      return redirect()->route('slots.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find the desired slot
        $slot = Slot::find($id);
        // get previous message id
        $previous = Slot::where('id', '<', $slot->id)->max('id');
        // get next message id
        $next = Slot::where('id', '>', $slot->id)->min('id');
        // return the show view
        return view('slots.show',compact('slot','previous','next'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $slot = Slot::findOrFail($id);
      return view('slots.edit', compact('slot'));
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
        'daterange' => 'Required|min:10|max:60',
        ));
      //save the data to the database
        $slot = Slot::find($id);
        $slot->daterange = $request->daterange;
        $slot->save();
        //set flash data with success message
        Session::flash('success', 'The slot was successfully updated !');
        return redirect()->route('slots.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $slot = Slot::find($id);
      $slot->delete();
      Session::flash('success', 'The slot was successfully deleted from the database !');
      return redirect()->route('slots.index');
    }
}
