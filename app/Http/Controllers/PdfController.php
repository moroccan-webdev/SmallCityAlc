<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shower;
use App;
use PDF;

class PdfController extends Controller
{
  public function getPDF($id){
    //retreive the actual message using the id
      $shower = Shower::find($id);
      $path = '/images/$shower->image';
      $pdf = PDF::loadView('pdf.shower', ['shower'=> $shower,'path'=> $path]);
      return $pdf->stream('shower.pdf');
  }
}
