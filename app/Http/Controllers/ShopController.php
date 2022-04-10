<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index() {
        // 主->従
        $area_tokyo = Area::find(1)->shops;
        // dd($area_tokyo);

        // 主<-従
        $shop = Shop::find(3)->area->name;

        // 多：多
        $shop_route = Shop::find(1)->routes()->get();
        dd($area_tokyo, $shop, $shop_route);
    }
}
