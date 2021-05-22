<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PageResource;
use App\Seo;
use App\Models\Car;
use App\Location;
use App\Models\Brand;
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
    public function getCarData($parameter){
        return Car::where('slug', $parameter)->first();
    }
    
    public function getCars($parameter){
        if($parameter == null){
            return Car::orderBy('id', 'DESC')->withTranslations()->get();
        }else{
            return Car::where('class',$parameter)->orderBy('id', 'DESC')->withTranslations()->get();
        }
    }
    public function getLocations(){
        return Location::orderBy('id', 'ASC')->withTranslations()->get();
    }

    public function getClassOne(){
        return Car::where('class', 'econom')->withTranslations()->get();
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
        
        $singleCar = $this->getCarData($carslug);
        $cars = $this->getCars($carslug);
        $carseo = $this->getSingleCarPage($lang);
        $locations = $this->getLocations();
        $econom = $this->getClassOne();
        $view = $page->viewname;
        $seos = Seo::orderby('id')->where('featured',1)->get();
        $pagescollection = PageResource::collection($seos);
        $pagess = $pagescollection->toArray($seos);
        return   view('front.'.$view,)->with(['pagess'=> $pagess, 'page'=>$page, 'car' => $singleCar, 'cars' =>$cars, 'carseo' => $carseo, 'locations'=>$locations, 'econom'=>$econom]);
    }
}
