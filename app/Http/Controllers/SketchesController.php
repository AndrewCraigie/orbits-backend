<?php

namespace App\Http\Controllers;

use App\Http\Resources\SketchStore;
use App\Sketch;
use App\Http\Resources\Sketch as SketchResource;
use App\Http\Resources\Sketches as SketchesResource;
use App\Http\Resources\FeaturedSeries as FeaturedSeriesResource;
use Illuminate\Http\Request;


class SketchesController extends Controller
{

    /**
     * It is not necessary to save appSettings or orbitDefs
     * in separate relational tables so the decision was
     * taken to encode them to JSON strings and store
     * them as fields within the Sketch table.
     * to do this requires 'transforming' the appSettings and orbitDefs
     * sent by the client when saving to JSON strings and when
     * retrieving them converting the strings back to actual JSON.
     * Doing these processes here means coding on the client-side is
     * more consistent.
     *
     * This use-case would be an excellent example of when
     * a no-sql database would be a more appropriate choice!!
     *
     */

    /**
     * Retrieve all sketches based on user role
     *
     */
    public function index(){

        // TODO implement authorisation for 'public'/'private' sketches

        // Transform string representations of appSettings
        // and orbitDefs to json
        $response = new SketchesResource(Sketch::get(), 200);

        // Return Sketch in format useful for client
        return response()->json($response, 200);

    }

    /**
     * Retrieve only featuredSeries sketches
     * transformed to only return id, title and description
     *
     */
    public function featuredseries(){

        // Transform string representations of appSettings
        // and orbitDefs to json
        $response = new FeaturedSeriesResource(Sketch::where('featuredSeries', 'true')->get(), 200);
        return response()->json($response, 200);

    }

    public function show($id){

        // TODO implement authorisation for 'public'/'private' sketches

        $sketch = Sketch::find($id);

        // If no Sketch found return null json
        if(is_null($sketch)){
            return response()->json(null, 404);
        }

        // Transform string representations of appSettings
        // and orbitDefs to json
        $response = new SketchResource(Sketch::findOrFail($id), 200);

        // Return Sketch in format useful for client
        return response()->json($response, 200);

    }

    public function store(Request $request){ // Request class defined on line 6

        // Get array from request
        $sketchToStore = $request->all();

        // Take appSettings as sent by client and encode it to json string
        $appSettingsJson = json_encode($sketchToStore['appSettings']);

        // Take orbitDefs as sent by client and encode it to json string
        $orbitDefsJson = json_encode($sketchToStore['orbitDefs']);

        // Replace object/array sent to json string versions
        $sketchToStore['appSettings'] = $appSettingsJson;
        $sketchToStore['orbitDefs'] = $orbitDefsJson;

        // Save 'transformed' version to database
        $sketch = Sketch::create($sketchToStore);

        // Send response to client
        return response()->json($sketch, 201);

    }

    public function delete(Request $request, Sketch $sketch){

        $sketch->delete();
        return response()->json(null, 204);

    }



}
