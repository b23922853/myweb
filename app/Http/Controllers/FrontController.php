<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class FrontController extends Controller
{
    // 開啟首頁
    public function index(){

        // $product = Product::find(3);  // 使用ID去抓到特定一筆的資料 (單筆)

        $product = Product::get(); //抓取所有符合條件的資料 (無論抓到幾筆, 結果一定是陣列)


        return view('frontend.index', compact('product'));
    }

    //天氣卡片
    public function weather(){

        return view('frontend.weather');
    }

    //新聞內頁
    public function news(){

        return view('frontend.news');
    }

}
