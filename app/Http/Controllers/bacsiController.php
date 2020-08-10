<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bacsi;
use App\benhvien;
use Illuminate\Support\Facades\DB;
use App\chuyenkhoa;

class bacsiController extends Controller
{
    //    function __construct()
    // {
    //      $this->middleware('permission:bs-list|bs-create|bs-edit|bs-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:bs-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:bs-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:bs-delete', ['only' => ['destroy']]);
    // }
    public function index(Request $request)
    {
        // code phan trang
        $benhviens = benhvien::orderBy('id', 'ASC')->get();
        $bacsi = bacsi::orderBy('id','ASC')->paginate(5);
        return view('bacsi.index',compact('bacsi', 'benhviens'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        $benhvien = DB::table('benhvien')->get();
        $chuyenkhoa = DB::table('chuyenkhoa')->get();
        return view('bacsi.create',compact('bacsi','benhvien','chuyenkhoa'));
    }
    public function showChuyenKhoainBenhVien(Request $request)
    {
        if ($request->ajax()) {
			$chuyenkhoa = chuyenkhoa::where('id_benhvien', $request->id_benhvien)->select('id', 'tenchuyenkhoa')->get();

			return response()->json($chuyenkhoa);
		}
    }
    public function store(Request $request)
    {
        // code tao database
        // code lay du lieu vao database
        $this->validate($request, [
            'tenbacsi' => 'required',
            'hocvi' => 'required',
            'id_benhvien' => 'required',
            'id_chuyenkhoa' => 'required',
        ],

        [
            'required' => ':attribute không được bỏ trống'
        ],

        [
            'tenbacsi' => 'Tên Bác Sĩ',
            'hocvi' =>'Học vị',
            'id_benhvien' => 'Tên bệnh viện',
            'id_chuyenkhoa' => 'Tên chuyên khoa',
        ]);

        

        $input = $request->all();

        $bacsi = bacsi::create($input);

        return redirect()->route('bacsi.index')
                        ->with('success','Doctor created successfully');
    }
    public function edit($id)
    {
        $benhvien = DB::table('benhvien')->get();
        $chuyenkhoa = DB::table('chuyenkhoa')->get();
        $bacsi = bacsi::find($id);
        return view('bacsi.edit',compact('bacsi','chuyenkhoa', 'benhvien'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tenbacsi' => 'required',
            'hocvi'=>'required',
            'id_benhvien' => 'required',
            'id_chuyenkhoa' => 'required',
        ],

        [
            'required' => ':attribute không được bỏ trống'
        ],

        [
            'tenbacsi' => 'Tên Bác Sĩ',
            'hocvi' => 'Học vị',
            'id_benhvien' => 'Tên bệnh viện',
            'id_chuyenkhoa' => 'Tên chuyên khoa',
        ]);
            
        $bacsi = bacsi::find($id);
        $bacsi->update($request->all());
        $bacsi->save();

        return redirect()->route('bacsi.index')
                        ->with('success','Hospital updated successfully');
    }
    public function destroy($id)
    {
        bacsi::find($id)->delete();
        return redirect()->route('bacsi.index')
                        ->with('success','Doctor deleted successfully');
    }

    public function show($id)
    {
        $bacsi = bacsi::find($id);
        return view('bacsi.show',compact('bacsi'));
    }

}
