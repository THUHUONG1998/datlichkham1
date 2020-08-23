<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Exports\BacsiExport;
use App\Imports\BacsiImport;
use App\Exports\benhnhanExport;
use App\Exports\benhnhandateExport;
use App\benhnhan;
use Illuminate\Support\Facades\Config;
use Maatwebsite\Excel\Facades\Excel;

  
class MyController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('users.index');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function export(Request $request) 
    // {
    //     $start_date = date_format(date_create($request->input('start-date')),"Y-m-d");
    //     $end_date = date_format(date_create($request->input('end-date')),"Y-m-d");
        
    //     return Excel::download(new UsersExport($start_date, $end_date), 'users.xlsx');
    // }
   
    public function exportBS(Request $request) 
    {
        $id_benhvien = $request->id_benhvien;
        return Excel::download(new BacsiExport($id_benhvien), 'bacsi.xlsx');
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Config::set(['excel.import.startRow', 2]);
        Excel::import(new UsersImport,request()->file('file'));
           
        return back();
    }
    public function importBS()
    {
        Config::set(['excel.import.startRow', 2]);
        Excel::import(new BacsiImport,request()->file('file'));
           
        return back();
    }
    public function exportBN(Request $request) 
    {
        return Excel::download(new benhnhanExport(), 'benhnhan.xlsx');
    }
    public function exportBN3(Request $request) 
    {
        $start_date = date_format(date_create($request->input('start-date')),"Y-m-d");
        $end_date = date_format(date_create($request->input('end-date')),"Y-m-d");
        $benhnhan1 = benhnhan::whereBetween('ngaykham', [$start_date, $end_date])->get();
        // dd($benhnhan1);
        
        return Excel::download(new benhnhandateExport($start_date, $end_date), 'benhnhan.xlsx');
    }
    public function exportuser(Request $request) 
    {
        return Excel::download(new UsersExport(), 'user.xlsx');
    }
}