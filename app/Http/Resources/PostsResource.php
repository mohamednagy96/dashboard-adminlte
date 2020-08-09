<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
        'id'=>$this->id,
            'title'=>$this->title,
            'shortbrief'=>$this->shortbrief,
            'readmore'=>$this->readmore,
            'image'=>$this->image ? 'http://127.0.0.1:8000/images/'.$this->image :'null'
        ];
       // return parent::toArray($request);
    }
}
