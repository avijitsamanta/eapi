<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

                'name'=>$this->name,
                'detail'=>$this->description,
                'price'=>$this->price,
                'discount'=>$this->discount,
                'stock'=> $this->stock,
                'total_price'=> $this->price - ($this->price * ($this->discount / 100)),

                'rating'=>$this->reviews->count()>0 ? round($this->reviews->sum('star')/$this->reviews->count()):'No rating',

                'href' =>[
                    'link' =>route('products.show',$this->id)
                ]
            ];
    }
}
