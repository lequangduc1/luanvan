<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\hangxe;

use function Ramsey\Uuid\v1;

class sanpham_Controller extends Controller
{
    public function list_sanpham(){
        $sanpham =sanpham::all();
        $hangxe = hangxe::all();
        return view('backend/sanpham/list_sanpham',['sanpham'=>$sanpham],['hangxe'=>$hangxe]);
    }
    public function getxoa($MaSP){
        $sanpham = sanpham::where('MaSP',$MaSP)->delete();
        return redirect('list_sanpham');
    }
    public function post_EditProduct(Request $request){
        $sanpham = new sanpham; 
        $sanpham->TenSP = $request->tensanpham;
        $sanpham->NoiDungMoTa = $request->mota;

        $sanpham->HinhAnh = $request->hinhanh;
        $sanpham->Gia=$request->gia;
        $sanpham->SoLuong = $request->soluong;
        $sanpham->HangXe = $request->hang;
        $sanpham->save();
        return redirect('list_sanpham');
    }
}
        