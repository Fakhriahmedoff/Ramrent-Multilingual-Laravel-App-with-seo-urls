<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PageResource;
use App\Seo;
use App;
class PagesController extends Controller
{
    public function homepage($lang){
       
    }
    public function getPage($slug){
        $lang = App::getlocale();
        if($lang == "az"){
            $page = Seo::where("slug_az", $slug)->first();
        }
        if($lang == "en"){
            $page = Seo::where("slug_en", $slug)->first();
        }
        if($lang == "ru"){
            $page = Seo::where("slug_ru", $slug)->first();
        }
        $view = $page->viewname;

        $seos = Seo::orderby('id')->get();
        $pagescollection = PageResource::collection($seos);
        $pagess = $pagescollection->toArray($seos);
        return  view('front.'.$view,)->with(['pagess'=> $pagess, 'page'=>$page]);
    }
}
