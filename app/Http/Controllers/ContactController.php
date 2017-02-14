<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\User;
use Session;
use Mail;
use Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        //$this->middleware('admin')/*->only(['index', 'show','destroy'])*/;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $this->authorize('view', Contact::class);
      $contacts = Contact::orderBy('id','desc')->paginate(10);
      return view('contacts.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
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
      'name'     => 'Required|min:4|max:255',
      'email'    => 'Required|email',
      'subject'  => 'Required|min:4|max:255',
      'body'     => 'Required|min:3',
      ));
    //save the data to the database
      $contact= new Contact;
      $contact->name      = $request->name;
      $contact->email     = $request->email;
      $contact->subject   = $request->subject;
      $contact->body      = $request->body;
      $contact->save();

      $data = array(
			'name'        => $contact->name,
			'email'       => $contact->email,
			'subject'     => $contact->subject,
			'bodyMessage' => $contact->body
			);

  		Mail::send('emails.contact', $data, function($message) use ($data){
  			$message->from($data['email']);
  			$message->to('rondbadre@gmail.com');
  			$message->subject($data['subject']);
  		});
      //set flash data with success message
      Session::flash('success', 'Your message sent !');
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
      $this->authorize('view', Contact::class);
      //find the desired FB
      $contact = Contact::find($id);
      // get previous FB id
      $previous = Contact::where('id', '<', $contact->id)->max('id');
      // get next FB id
      $next = Contact::where('id', '>', $contact->id)->min('id');
      // return the show view
      return view('contacts.show',compact('contact','previous','next'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Contact $contact)
    {
      $this->authorize('delete', $contact);
      //$contact = Contact::find($id);
      $contact->delete();
      Session::flash('success', 'The message was successfully deleted !');
      return redirect()->route('contacts.index');
    }
}
