<?php
 
namespace App\Http\Controllers;
use App\benhnhan;
use Illuminate\Http\Request;
use App\Mail\MailNotify;
use Redirect,Response,DB,Config;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
   public function index(){
        return view('email.index');
   }
   public function GuiThongTin(Request $request){
        $ho_ten = $request->get('hoten');
        $dia_chi = $request->get('diachi');
        $sodienthoai = $request->get('sodienthoai');
        $email = $request->get('email');
        $noi_dung= $request->get('noidung');
        $noi_dung_send_mail = '<p>Chào bạn '.$ho_ten. '</p';
        $noi_dung_send_mail = '<p>địa chỉ '.$dia_chi. '</p';
        $noi_dung_send_mail = '<p>số điện thoại '.$sodienthoai. '</p';
        $noi_dung_send_mail = '<p> '.$noi_dung. '</p';
        $result = Mail::to($email)->send(new SendEmail($noi_dung_send_mail));
   }
}