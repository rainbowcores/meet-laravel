<?php

namespace App\Exports;

use App\Meetings;
use Maatwebsite\Excel\Concerns\FromCollection;

class MeetingsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Meetings::all();
    }
}
