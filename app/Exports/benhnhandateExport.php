<?php

namespace App\Exports;

use App\benhnhan;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class benhnhandateExport implements FromView, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    function __construct(string $start_date, string $end_date)
    {   $this->start_date = $start_date;
        $this->end_date = $end_date;

    }
    public function view(): View
    {
        return view('export.benhnhan1', [
            'benhnhan1' => benhnhan::whereBetween('ngaykham', [$this->start_date, $this->end_date])->get()
        ]);
    }
    public function headings(): array
    {
        return [
            'hovaten', 
            'ngaykham', 
            'email', 
            'id_chuyenkhoa', 
            'gioitinh',
            'id_benhvien', 
            'ngaysinh'
        ];
    }
}