<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PageResource;
use App\Seo;
use App\Models\Car;
use App;
class PagesController extends Controller
{

    public function homepage($lang){
     
    }

    public function getSingleCarPage($lang){
        if($lang == 'az'){
            return  Seo::where('page_id',999)->first()->slug_az;
        }elseif($lang == 'ru'){
            return  Seo::where('page_id',999)->first()->slug_ru;
        }else{
            return  Seo::where('page_id',999)->first()->slug_en;
        }
      
    }
    public function getModelData($parameter){
        return Car::where('slug', $parameter)->first();
    }
    public function getCars($parameter){
        if($parameter == null){
            return Car::orderBy('id', 'DESC')->withTranslations()->get();
        }else{
            return Car::where('class',$parameter)->orderBy('id', 'DESC')->withTranslations()->get();
        }
       
    }

    public function getPage($slug,$carslug = null){
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
        
        $singleCar = $this->getModelData($carslug);
        $cars = $this->getCars($carslug);
        $view = $page->viewname;
        $seos = Seo::orderby('id')->where('featured',1)->get();
        $pagescollection = PageResource::collection($seos);
        $carseo = $this->getSingleCarPage($lang);
        $pagess = $pagescollection->toArray($seos);
        return  view('front.'.$view,)->with(['pagess'=> $pagess, 'page'=>$page, 'car' => $singleCar, 'cars' =>$cars, 'carseo' => $carseo]);
    }
}
