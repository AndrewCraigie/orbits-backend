<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeaturedSeries extends JsonResource
{
    /**
     * Return only id, title and description.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $onlyWantedFields = function($sketch){
            return [
                'id' => $sketch['id'],
                'title' => $sketch['title'],
                'description' => $sketch['description']
                ];
        };

        $featuredSketches = array_map( $onlyWantedFields, parent::toArray($request));

        return $featuredSketches;
    }
}
