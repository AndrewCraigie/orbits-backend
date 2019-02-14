<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class Sketch extends JsonResource
{
    /**
     * Transform the resource into a suitable format
     * for storage in the Sketches table.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $sketchArray = parent::toArray($request);

        $appSettings = $sketchArray['appSettings'];
        $orbitDefs = $sketchArray['orbitDefs'];

        $appSettingsObject = json_decode(stripslashes($appSettings));
        $orbitDefsObject = json_decode(stripslashes($orbitDefs));

        $sketch = [
            'id' => $sketchArray['id'],
            'title' => $sketchArray['title'],
            'description' => $sketchArray['description'],
            'public' => $sketchArray['public'],
            'featuredSeries' => $sketchArray['featuredSeries'],
            'appSettings' => $appSettingsObject,
            'orbitDefs' => $orbitDefsObject,
            'user_id' => $sketchArray['user_id'],
            'created_at' => $sketchArray['created_at'],
            'updated_at' => $sketchArray['updated_at']
        ];

        return $sketch;

    }
}
