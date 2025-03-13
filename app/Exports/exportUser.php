<?php

namespace App\Exports;

use App\Models\SignUp;
use Maatwebsite\Excel\Concerns\FromCollection;

class exportUser implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SignUp::all();
    }
}
