<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\exportUser;
use Excel;

class ExcelController extends Controller
{
    public function exportUser()
    {
        // dd('Export');
        return Excel::download(new exportUser, 'Users.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }
}
