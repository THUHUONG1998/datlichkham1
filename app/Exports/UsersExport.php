<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    // function __construct(string $start_date, string $end_date)
    // {   $this->start_date = $start_date;
    //     $this->end_date = $end_date;

    // }
    // public function view(): View
    // {
    //     return view('export.user', [
    //         'users' => User::whereBetween('created_at', [$this->start_date.' 00:00:00', $this->end_date.' 23:59:59'])->select('username', 'hovaten', 'email', 'manhanvien', 'gioitinh')->get()
    //     ]);
    // }
    public function view(): View
    {
        return view('export.user', [
                    'users' => User::all()
                ]);
    }
    public function headings(): array
    {
        return [
            'username',  
            'hovaten', 
            'email',
            'manhanvien',  
            'gioitinh'  
        ];
    }
}
