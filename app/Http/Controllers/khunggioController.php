<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khunggio;
use App\benhvien;
use Illuminate\Support\Facades\DB;

class khunggioController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:kg-list|kg-create|kg-edit|kg-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:kg-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:kg-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:kg-delete', ['only' => ['destroy']]);
    // }
    public function index(Request $request)
    {
        // code phan trang
        $khunggio = khunggio::orderBy('id','ASC')->paginate(5);
        
        return view('khunggio.index',compact('khunggio'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        $benhvien = DB::table('benhvien')->get();
        return view('khunggio.create', [ 'benhvien' => $benhvien]);
    }
    public function store(Request $request)
    {
        // code tao database
        // code lay du lieu vao database
        $this->validate($request, [
            'khunggio' => 'required',
            'id_benhvien' => 'required',
            'gioihanluongdat' =>'integer|min:1',
        ],

        [
            'required' => ':attribute không được bỏ trống',
            'integer' =>':attribute phải là số nguyên',
            'min' => ':attribute phải lớn hơn 0'
        ],

        [
            'khunggio' => 'Khung giờ',
            'id_benhvien' => 'Tên bệnh viện',
            'gioihanluongdat' => 'giới hạn lượt đặt'
        ]);

        

        $input = $request->all();

        $khunggio = khunggio::create($input);

        return redirect()->route('khunggio.index')
                        ->with('success','Time created successfully');
    }

  
  


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        // $khunggio = DB::table('khunggio')->get();
        $benhvien = DB::table('benhvien')->get();
        $khunggio = khunggio::find($id);
        return view('khunggio.edit',compact('khunggio','benhvien'));
    }
    public function update(Request $request, $id)
    {
        $khunggio = khunggio::find($id);
        $this->validate($request, [
            'khunggio' => 'required',
            'id_benhvien' => 'required',
            'gioihanluongdat' =>'integer|min:1',
        ],

        [
            'required' => ':attribute không được bỏ trống',
            'integer' =>':attribute phải là số nguyên',
            'min' => ':attribute phải lớn hơn 0'
        ],

        [
            'khunggio' => 'Khung giờ',
            'id_benhvien' => 'Tên bệnh viện',
            'gioihanluongdat' => 'giới hạn lượt đặt'
        ]);


        $input = $request->all();

        $khunggio->update($input);
        return redirect()->route('khunggio.index')
                        ->with('success','Chuyen Khoa updated successfully');
    }
    public function destroy($id)
    {
        $kg = khunggio::find($id);
        if($kg->benhnhan)
        {
            $kg->benhnhan()->update(['id_khunggio' => null]);
        }
        $kg->delete();
        return redirect()->route('khunggio.index')
                        ->with('success','Time deleted successfully');
    }

}
