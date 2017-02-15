<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worksheet;
use App\Roleplay;
use App\Level;
use App\Slot;
use Response;
use App\User;
use Session;
use Auth;
use File;
use PDF;
use App;
//use PDF;


class WorksheetController extends Controller
{

  public function __construct()
  {
      //$this->middleware('admin');
      //$this->middleware('teacher', ['except' => 'index']);

  }

  public function index()
  {
    $this->authorize('view', Worksheet::class);
    $worksheets = Worksheet::orderBy('id','desc')->paginate(10);
    return view('worksheets.index',compact('worksheets'));
  }

  public function create()
  {
      $this->authorize('create', Worksheet::class);
      $levels = Level::pluck('level','id')->all();
      $slots = Slot::pluck('daterange','id')->all();
      return view('worksheets.create',compact('levels','slots'));
  }

  public function generate(Request $request)
  { //validate the responser 'server-side validatation'.
    $this->validate($request, array(
    'level_id'  => 'Required',
    'slot_id'      => 'Required',
    'students'      => 'Required|integer|min:1|max:99|',
    'room'      => 'Required|min:1|max:3|',
    ));
    //create a new instance of the object worksheet
    $worksheet = new worksheet;
    //retrieve the authenticated user
    $user = Auth::user();
    //save the validated request within the new instance in the database
    $worksheet->slot_id = $request->slot_id;
    $worksheet->level_id = $request->level_id;
    $worksheet->students = $request->students;
    $worksheet->room = $request->room;
    $worksheet->teacher = $user->name;
    $worksheet->save();

    $level    = $worksheet->level_id;
    $slot    = $worksheet->slot_id;
    $students = $worksheet->students;
    $array = [];
        if($level >= 1 && $level <= 6)
        {
          //$array = [];
          for($i = 0; $i < $students; $i++){
            $random_roleplays = Roleplay::whereBetween('level_id', [1, 6])
                  ->inRandomOrder()
                  ->get()->random(3);

                  foreach ($random_roleplays as $roleplay) {
                    $worksheet->roleplays()->save($roleplay);
                  }
                  $array[$i]= $random_roleplays;
          }
        }
        elseif($level >= 7 && $level <= 12)
        {
          //$array = [];
          for($i = 0; $i < $students; $i++){
            $random_roleplays = Roleplay::whereBetween('level_id', [7, 12])
                  ->inRandomOrder()
                  ->get()->random(3);

                  foreach ($random_roleplays as $roleplay) {
                    $worksheet->roleplays()->save($roleplay);
                  }
                  $array[$i]= $random_roleplays;
          }
        }
        elseif($level >= 13 && $level <= 17)
        {
          //$array = [];
          for($i = 0; $i < $students; $i++){
            $random_roleplays = Roleplay::whereBetween('level_id', [13, 17])
                  ->inRandomOrder()
                  ->get()->random(3);

                  foreach ($random_roleplays as $roleplay) {
                    $worksheet->roleplays()->save($roleplay);
                  }
                  $array[$i]= $random_roleplays;
          }
        }
        else
        {
          return "there are not enought roleplays";
        }

        //dd($array);
        $pdf = PDF::loadView('pdfs.result', [
                              'array' => $array,
                              'random_roleplays' => $random_roleplays,
                              'worksheet'=>$worksheet,
                              'user'=>$user
                            ])->save(public_path('/pdfs/'.$user->name.'_'.$worksheet->id.'.pdf' ));
      $filename = $user->name.'_'.$worksheet->id.'.pdf';
      return view('worksheets.download',compact('filename'));
    }

}
