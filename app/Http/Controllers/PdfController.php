<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Roleplay;
use App\User;
use App;
use PDF;

class PdfController extends Controller
{
  public function __construct()
  {
      $this->middleware('admin');
  }

  public function getPDF($id){
    //retreive the actual message using the id
      $user = User::find($id);
      $pdf = \PDF::loadView('pdfs.user', ['user'=> $user]);
      return $pdf->stream('user.pdf');
  }

  public function getRPPDF($id){
    //retreive the actual message using the id
      $roleplay = Roleplay::find($id);
      $pdf = \PDF::loadView('pdfs.roleplay', ['roleplay'=> $roleplay]);
      return $pdf->stream('roleplay.pdf');
  }
}
