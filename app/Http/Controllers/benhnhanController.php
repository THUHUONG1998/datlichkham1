<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\benhnhanChart;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Mail\SendMail;
use App\benhnhan;
use App\chuyenkhoa;
use App\khunggio;
use App\benhvien;
use App\bacsi;
use App\chitietbenhnhan;
use App\chitietkham;
use Auth;
use DB;

class benhnhanController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:benhnhan-list|benhnhan-create|benhnhan-edit|benhnhan-delete', ['only' => ['index','store']]);
         $this->middleware('permission:benhnhan-create', ['only' => ['create','store']]);
         $this->middleware('permission:benhnhan-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:benhnhan-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $benhnhan = benhnhan::orderBy('id','ASC')->paginate(5);
      //  $benhvien = DB::table('benhvien')->get();
        return view('benhnhan.index',compact('benhnhan'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $benhvien = DB::table('benhvien')->get();
        // $bacsi=DB::table('bacsi')->get();
        // $chuyenkhoa = DB::table('chuyenkhoa')->get();
        $data=DB::table('users')->get();
      //  $khunggio=DB::table('khunggio')->get();
        return view('benhnhan.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'hovaten' => 'required|min:5|max:255',
            'ngaysinh'=>'required|date',
            'sodienthoai'=>'required',
            'gioitinh'=>'required',
            'email'=>'required',
            'diachi'=>'required',
        ],

        [
            'required' => ':attribute không được bỏ trống'
        ],
        [
            'hovaten' => 'Họ và tên',
            'ngaysinh'=> 'Ngày sinh',
            'sodienthoai'=> 'Số điện thoại',
            'diachi'=> 'Địa chỉ',
            'gioitinh'=> 'Giới tính',
            'email'=> 'Địa chỉ email',
        ]);
        $input = $request->all();
        $input['ngaysinh']=date_format(date_create($request->ngaysinh), "Y-m-d");
        $input['id_user'] = Auth::user()->id;
        $benhnhan = benhnhan::create($input);
        return redirect()->route('benhnhan.index')
                        ->with('success','Thêm bệnh nhân thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $benhnhan = benhnhan::find($id);
        return view('benhnhan.index',compact('benhnhan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data=DB::table('users')->get();
        $benhnhan = benhnhan::find($id);
        return view('benhnhan.edit',compact( 'benhnhan','benhvien','bacsi','chuyenkhoa','data','khunggio'));
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
        $this->validate($request, [
            'hovaten' => 'required|min:5|max:255',
            'ngaysinh'=>'required|date',
            'email'=>'required',
            'sodienthoai'=>'required',
            'gioitinh'=>'required',
           
        ],
        [
            'required' => ':attribute không được bỏ trống'
        ],
        [
            'hovaten' => 'Họ và tên',
            'ngaysinh'=> 'Ngày sinh',
            'sodienthoai'=> 'Số điện thoại',
            'diachi'=> 'Địa chỉ',
            'gioitinh'=> 'Giới tính',
            'email'=> 'Địa chỉ email',
            

        ]);
        $input = $request->all();
        $benhnhan = benhnhan::find($id);
        $input['ngaysinh']=date_format(date_create($request->ngaysinh), "Y-m-d");
        $benhnhan->update($input);
        $benhnhan->save();

        return redirect()->route('benhnhan.index')
                        ->with('success','Sửa bệnh nhân thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        benhnhan::find($id)->delete();
        return redirect()->route('benhnhan.index')
                        ->with('success','Patient deleted successfully');
    }
    public function showChuyenKhoainBenhNhan(Request $request)
    {
        if ($request->ajax()) {
			$chuyenkhoa = chuyenkhoa::where('id_benhvien', $request->id_benhvien)->select('id', 'tenchuyenkhoa')->get();

			return response()->json($chuyenkhoa);
		}
    }
    public function showKhungGioinBenhNhan(Request $request)
    {
        if ($request->ajax()) {
			$khunggio = khunggio::where('id_benhvien', $request->id_benhvien)->select('id', 'khunggio')->get();

			return response()->json($khunggio);
		}
    }
    public function showBacSiinBenhNhan(Request $request)
    {
        if ($request->ajax()) {
			$bacsi = bacsi::where('id_chuyenkhoa', $request->id_chuyenkhoa)->select('id', 'tenbacsi')->get();

			return response()->json($bacsi);
		}
    }
    public function datlichkham($id){
        $benhvien = DB::table('benhvien')->get();
        $bacsi=DB::table('bacsi')->get();
        $chuyenkhoa = DB::table('chuyenkhoa')->get();
        $data=DB::table('users')->get();
        $khunggio=DB::table('khunggio')->get();
        $benhnhan = benhnhan::find($id);
        return view('chitietbenhnhan.datlichkham',compact( 'benhnhan','benhvien','bacsi','chuyenkhoa','data','khunggio'));

    }
    public function luulichkham(Request $request, $id)
    {
        $this->validate($request, [
            'hovaten' => 'required|min:5|max:255',
            'ngaykham'=>'required|date',
            'id_benhvien' => 'required',
            'id_bacsi' => 'required',
            'id_chuyenkhoa' => 'required',
            'id_khunggio'=>'required',

        ],

        [
            'required' => ':attribute không được bỏ trống'
        ],
        [
            'hovaten' => 'Họ và tên',
            'ngaykham'=> 'Ngày khám',
            'id_benhvien'=> 'Bệnh viện',
            'id_bacsi'=>'Bác sĩ',
            'id_chuyenkhoa'=>'Chuyên khoa',
            'id_khunggio'=>' Khung giờ'

        ]);

        $input = $request->all();
        $input['ngaykham']=date_format(date_create($request->ngaykham), "Y-m-d");
        $benhnhan = benhnhan::find($id);
        $input['id_benhnhan'] = $benhnhan->id;
    //    $input['id_user'] = Auth::user()->id;
        
        $chitietbenhnhan = chitietbenhnhan::create($input);
        return redirect()->route('noidung', $chitietbenhnhan->id)
                        ->with('success','Thêm bệnh nhân thành công');
    }
    public function noidung($id){
        $benhvien = DB::table('benhvien')->get();
        $bacsi=DB::table('bacsi')->get();
        $chuyenkhoa = DB::table('chuyenkhoa')->get();
        $data=DB::table('users')->get();
        $khunggio=DB::table('khunggio')->get();
        $chitietbenhnhan = chitietbenhnhan::find($id);
        $benhnhan = benhnhan::find($id);
        return view('email.index',compact( 'chitietbenhnhan','benhvien','bacsi','chuyenkhoa','data','khunggio', 'benhnhan'));
   }
   public function guimail(Request $request, $id)
   {
       $chitietbenhnhan = chitietbenhnhan::where('id', $id)->first();
       $data = array();
       $data[] = [
           'hovaten' => $chitietbenhnhan->benhnhan->hovaten,
           'ngaysinh' => $chitietbenhnhan->benhnhan->ngaysinh,
           'sodienthoai' => $chitietbenhnhan->benhnhan->sodienthoai,
           'email' => $chitietbenhnhan->benhnhan->email,
           'diachi' => $chitietbenhnhan->benhnhan->diachi,
           'bacsi'=>$chitietbenhnhan->bacsi->tenbacsi,
           'ngaykham'=>$chitietbenhnhan->ngaykham,
           'chuyenkhoa'=>$chitietbenhnhan->chuyenkhoa->tenchuyenkhoa,
           'benhvien'=>$chitietbenhnhan->benhvien->tenbenhvien,
           'khunggio'=>$chitietbenhnhan->khunggio->khunggio,
           'diachibenhvien' => $chitietbenhnhan->benhvien->diachi,
           'sodienthoaibv' => $chitietbenhnhan->benhvien->sodienthoai,
       ];
       $input = $request->all();
       Mail::to($request->email)->send(new SendMail($data));
       $chitietbenhnhan->update($input);
      
       return redirect()->route('benhnhan.index')->with('success','Gửi email thành công');
   }
   public function lichsu($id){
       $benhnhan= benhnhan::find($id);
       $chitietkham = chitietkham::where('id_benhnhan', $benhnhan->id)->get();
      $lankham = $chitietkham->count();
      if($lankham==0){
          return redirect()->route('benhnhan.index')->with('error', 'Bệnh nhân này chưa có lịch sử khám');
      }

       return view('benhnhan.lichsu', compact('lankham', 'benhnhan', 'chitietkham'));
   }
    
   
}
