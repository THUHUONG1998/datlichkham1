<?php

namespace App\Imports;

use App\benhvien;
use App\chuyenkhoa;
use App\bacsi;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class BacsiImport implements ToModel, WithMultipleSheets, WithStartRow 
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $ten_benh_vien = benhvien::where("tenbenhvien", "like", "%".$row[3]."%")->get();
        $chuyen_khoa = chuyenkhoa::where("tenchuyenkhoa", "like", "%".$row[2]."%")->get();
        if(!isset($row[0])){
            return null;
        }
        foreach($ten_benh_vien as $benh_vien)
        {
            foreach($chuyen_khoa as $ten_chuyen_khoa)
            {
                return new Bacsi([
                    'tenbacsi'   => $row[0],
                    'hocvi'   => $row[1],
                    'id_chuyenkhoa'   => $ten_chuyen_khoa->id,
                    'id_benhvien'   => $benh_vien->id,
                ]);
            }
        }

        
        
    }
    public function sheets(): array
    {
        return [
            0 => new BacsiImport(),
        ];
    }

    public function startRow(): int
    {
        return 2;
    }
}
