<?php

namespace App\Exports;

use App\benhnhan;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;

class benhnhanExport implements FromView, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // function __construct(string $id_benhvien)
    // {   
    //     $this->id_benhvien = $id_benhvien;
    // }
    public function view(): View
    {
        return view('export.benhnhan', [
            'benhnhan' => benhnhan::all()
        ]);
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) 
            {

            }
        ];
    }
}
