<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\chitietbenhnhan;
use App\benhnhan;
use App\benhvien;
use App\chuyenkhoa;
use App\bacsi;
use App\khunggio;
use App\chitietkham;

class chitietbenhnhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $chitietbenhnhanchoray = chitietbenhnhan::orderBy('id','ASC')->groupBy('id_benhnhan')->where('id_benhvien',1)->paginate(5);
        $chitietbenhnhanphucngoc = chitietbenhnhan::orderBy('id','ASC')->groupBy('id_benhnhan')->where('id_benhvien',2)->paginate(5);
        //  $benhvien = DB::table('benhvien')->get();
          return view('chitietbenhnhan.index',compact('chitietbenhnhanchoray','chitietbenhnhanphucngoc'))
              ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chitiet(Request $request, $id)
    {
        $chitietbenhnhan = chitietbenhnhan::find($id);
        $benhvien = DB::table('benhvien')->get();
        $bacsi=DB::table('bacsi')->get();
        $chuyenkhoa = DB::table('chuyenkhoa')->get();
        $data=DB::table('users')->get();
        $khunggio=DB::table('khunggio')->get();
        $benhnhan = benhnhan::find($id);
        return view('chitietbenhnhan.chitietkham',compact('data', 'benhvien', 'bacsi', 'chuyenkhoa', 'khunggio', 'benhnhan', 'chitietbenhnhan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function luuchitietkham(Request $request, $id)
    {
        $this->validate($request, [
            'trieuchung'=>'required',
            'donthuoc'=>'required',
            
        ],

        [
            'required' => ':attribute không được bỏ trống'
        ],
        [
          
            'trieuchung'=> 'Triệu chứng',
            'donthuoc'=> 'Đơn thuốc',
        ]);

        $input = $request->all();
        $chitietbenhnhan = chitietbenhnhan::find($id);
        $input['id_chitietbenhnhan'] = $chitietbenhnhan->id;
    //    $input['id_user'] = Auth::user()->id;
        
        $chitietkham = chitietkham::create($input);
        // dd($chitietkham);
        // die();
        return redirect()->route('chitietbenhnhan.index')
                        ->with('success','patient created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
