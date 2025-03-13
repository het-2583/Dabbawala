<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\products;

class pdfController extends Controller
{

     public function generatePDF()
    {
        $name=products::all();
        $pdf=PDF::loadView('pdfDown',['name'=>$name]);
        return $pdf->download('Bill.pdf');

    }
         
}
          
      
    

    
