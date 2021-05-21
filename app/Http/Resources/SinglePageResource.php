<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App;
class SinglePageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $lang = App::getlocale();
        if($lang == 'az'){
            return [
                "id" =>  $this->id ,
                "title" =>  $this->title_az ,
                "description" =>  $this->description_az ,
                "slug" =>  $this->slug_az ,
                "created_at" =>  $this->created_at ,
                "updated_at" =>  $this->updated_at ,
                "page_id" =>  $this->page_id ,
                "viewname" =>  $this->viewname ,
            ];
        }elseif($lang == 'ru'){
            return [
                "id" =>  $this->id ,
                "slug" =>  $this->slug_ru ,
                "title" =>  $this->title_ru ,
                "description" =>  $this->description_ru, 
                "created_at" =>  $this->created_at ,
                "updated_at" =>  $this->updated_at ,
                "page_id" =>  $this->page_id ,
                "viewname" =>  $this->viewname ,
            ];
        }else{
            return [
                "id" =>  $this->id ,
                "title" =>  $this->title_en ,
                "description" =>  $this->description_en ,
                "slug" =>  $this->slug_en ,
                "created_at" =>  $this->created_at ,
                "updated_at" =>  $this->updated_at ,
                "page_id" =>  $this->page_id ,
                "viewname" =>  $this->viewname ,
            ];
        }

        
    }
}
