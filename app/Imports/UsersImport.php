<?php
  
namespace App\Imports;
  
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;
HeadingRowFormatter::default('none');
class UsersImport implements ToModel, WithMultipleSheets, WithStartRow 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!isset($row[0])){
            return null;
        }
        return new User([
            'username'   => $row[0],
            'hovaten'   => $row[1],
            'email'   => $row[2],
            'manhanvien'   => $row[3],
            'gioitinh'   => $row[4],
        ]);
        
    }
    
    public function sheets(): array
    {
        return [
            0 => new UsersImport(),
        ];
    }

    public function startRow(): int
    {
        return 2;
    }
}
