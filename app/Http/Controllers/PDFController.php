<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use DB;
use App\chitietbenhnhan;
use App\chitietkham;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id){
        $chitietkham=chitietkham::find($id);
        return view('chitietkham.index',compact('chitietkham'));
    }
    public function generatePDF($id)
    {
        $date = date('d-m-Y');
        $ngaytaikham = date('d-m-Y', strtotime($date. ' + 14 days'));
     
        $chitietkham=chitietkham::find($id);
       // $chitietkham = DB::table('chitietkham')->first();
        //$data = ['title' => 'Welcome to ItSolutionStuff.com'];
        $data[] = [
            'title'=>'Đơn thuốc',
            'hovaten' => $chitietkham->chitietbenhnhan->hovaten,
            'ngaysinh' => $chitietkham->chitietbenhnhan->ngaysinh,
            'ngaykham' => $chitietkham->chitietbenhnhan->ngaykham,
            'gioitinh' =>$chitietkham->benhnhan->gioitinh,
            'donthuoc' => $chitietkham->donthuoc,
            'ngaytaikham'=>$ngaytaikham,
            'benhvien'=>$chitietkham->chitietbenhnhan->benhvien->tenbenhvien,
            'diachi'=>$chitietkham->chitietbenhnhan->benhvien->diachi,
            'sodienthoai'=>$chitietkham->chitietbenhnhan->benhvien->sodienthoai,
            'chuyenkhoa'=>$chitietkham->chitietbenhnhan->chuyenkhoa->tenchuyenkhoa,
            'bacsi'=>$chitietkham->chitietbenhnhan->bacsi->tenbacsi,
        ];
        $pdf = PDF::loadView('myPDF', compact('data'))->download('donthuoc.pdf');
        

  
        return $pdf;
    }
}