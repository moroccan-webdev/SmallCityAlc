<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\User;
use Session;
use Auth;

class FeedbackController extends Controller
{
    public function __construct()
    {

        //$this->middleware('teacher')->only(['create', 'store']);
        //$this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view', Feedback::class);
        $feedbacks = Feedback::orderBy('id','desc')->paginate(10);
        return view('feedbacks.index',compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Feedback::class);
        return view('feedbacks.create');
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
      'title'     => 'Required|min:4|max:255',
      'body'      => 'Required|min:3',
      ));
    //save the data to the database
      $feedback= new Feedback;
      $user = Auth::user();
      $feedback->title      = $request->title;
      $feedback->body       = $request->body;
      $feedback->user_id    = $user->id;
      $feedback->save();
      //set flash data with success message
      Session::flash('success', 'Your feedback was successfully sent to the administrator !');
      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('view', Feedback::class);
        //find the desired FB
        $feedback = Feedback::find($id);
        // get previous FB id
        $previous = Feedback::where('id', '<', $feedback->id)->max('id');
        // get next FB id
        $next = Feedback::where('id', '>', $feedback->id)->min('id');
        // return the show view
        return view('feedbacks.show',compact('feedback','previous','next'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        $this->authorize('delete', $feedback);
        //$feedback = Feedback::find($id);
        $feedback->delete();
        Session::flash('success', 'The feedback was successfully deleted !');
        return redirect()->route('feedbacks.index');
    }
}
