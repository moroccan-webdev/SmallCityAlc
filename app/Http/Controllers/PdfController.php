<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App;
use PDF;

class PdfController extends Controller
{
  public function getPDF($id){
    //retreive the actual message using the id
      $user = User::find($id);
      $pdf = \PDF::loadView('pdfs.user', ['user'=> $user]);
      return $pdf->stream('user.pdf');

  }
}
