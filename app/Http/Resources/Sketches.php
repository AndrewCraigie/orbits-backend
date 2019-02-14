<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Sketches extends JsonResource
{

    /**
     * Transform the resource into a suitable format
     * for storage in the Sketches table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $sketches = parent::toArray($request);

        $transform = function($sketch){


            $appSettings = $sketch['appSettings'];
            $orbitDefs = $sketch['orbitDefs'];

            $appSettingsObject = json_decode(stripslashes($appSettings));
            $orbitDefsObject = json_decode(stripslashes($orbitDefs));

            $sketchTransformed = [
                'id' => $sketch['id'],
                'title' => $sketch['title'],
                'description' => $sketch['description'],
                'public' => $sketch['public'],
                'featuredSeries' => $sketch['featuredSeries'],
                'appSettings' => $appSettingsObject,
                'orbitDefs' => $orbitDefsObject,
                'user_id' => $sketch['user_id'],
                'created_at' => $sketch['created_at'],
                'updated_at' => $sketch['updated_at']
            ];

            return $sketchTransformed;
        };

        return array_map($transform, $sketches);
    }
}
