<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Bill;

class thongkeController extends Controller
{
    public function getDanhSach()
    {
    	$users = DB::table('users')->count();
        $products = DB::table('products')->count();
        $bills= DB::table('bills')->count();
        $thongke_ds = Bill::where('complete',2)->sum('total');
                
    	return view('admin.thongke.danhsach', compact('users','products','bills','thongke_ds'));
    }
    
    // public function thongke_users()
    // {
    // 	$users = DB::table('User')->count();
    // 	return view('admin.thongke.danhsach', compact('thongke_users'));
    // }
}
