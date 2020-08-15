<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use DB;
use App\chitietbenhnhan;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $chitietbenhnhan = DB::table('chitietbenhnhan')->where('id', 7)->first();
        //$data = ['title' => 'Welcome to ItSolutionStuff.com'];
        $data = ['note' => $chitietbenhnhan->hovaten];
        $pdf = PDF::loadView('myPDF', $data);
  
        return $pdf->download('itsolutionstuff.pdf');
    }
}