<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user_id = DB::table('users')->insertGetId([
            'name' => 'Andrew Craigie',
            'email' => 'andrew@craigie.co',
            'password' => bcrypt('jf8kkn4kd8meh')
        ]);

        DB::table('sketches')->insertGetId([
        'title' => 'Sample 1',
        'description' => 'Simple series',
        'public' => 'true',
        'featuredSeries' => 'true',
        'appSettings' => '{"plotXOffset":"400","plotYOffset":"350","currentT":"0","interval":"0.1","iterations":"20000","currentIteration":"0","plotScale":"1","cX":"400","cY":"400","endX":"0","endY":"0","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"}',
        'orbitDefs' => '[{"orbitDefId":"xlidhg", "n":"1","cX":"0","cY":"0","r":"200","phase":"0","a":"1","b":"1","fX":"r * cos((t * a) + phase)","fY":"r * sin((t * a) + phase)","endX":"0","endY":"0","orbitColor":"#FF0000","orbitStrokeWeight":"1","orbitOpacity":"0.7","orbitShow":"true","armColor":"#000000","armStrokeWeight":"1","armOpacity":"0.8","armShow":"true","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"},{"orbitDefId":"virmngj", "n":"1","cX":"0","cY":"0","r":"80","phase":"0","a":"6","b":"1","fX":"r * cos((t * a) + phase)","fY":"r * sin((t * a) + phase)","endX":"0","endY":"0","orbitColor":"#FF0000","orbitStrokeWeight":"1","orbitOpacity":"0.7","orbitShow":"true","armColor":"#000000","armStrokeWeight":"1","armOpacity":"0.8","armShow":"true","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"},{"orbitDefId":"virmngj", "n":"1","cX":"0","cY":"0","r":"40","phase":"0","a":"36","b":"1","fX":"r * cos((t * a) + phase)","fY":"r * sin((t * a) + phase)","endX":"0","endY":"0","orbitColor":"#FF0000","orbitStrokeWeight":"1","orbitOpacity":"0.7","orbitShow":"true","armColor":"#000000","armStrokeWeight":"1","armOpacity":"0.8","armShow":"true","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"}]',
        'user_id' => $user_id
        ]);

        DB::table('sketches')->insertGetId([
            'title' => 'Sample 2',
            'description' => 'Some title or other',
            'public' => 'true',
            'featuredSeries' => 'true',
            'appSettings' => '{"plotXOffset":"400","plotYOffset":"400","currentT":"0","interval":"0.1","iterations":"20000","currentIteration":"0","plotScale":"1","cX":"0","cY":"0","endX":"0","endY":"0","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"}',
            'orbitDefs' => '[{"orbitDefId":"fbhej","n":"1","cX":"0","cY":"0","r":"50","phase":"0","a":"1","b":"1","fX":"r * cos((t * a) + phase)","fY":"r * sin((t * a) + phase)","endX":"0","endY":"0","orbitColor":"#FF0000","orbitStrokeWeight":"1","orbitOpacity":"0.7","orbitShow":"true","armColor":"#000000","armStrokeWeight":"1","armOpacity":"0.8","armShow":"true","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"},{"orbitDefId":"fbgeeb","n":"1","cX":"0","cY":"0","r":"40","phase":"0","a":"1","b":"1","fX":"r * cos((t * a) + phase)","fY":"r * sin((t * a) + phase)","endX":"0","endY":"0","orbitColor":"#FF0000","orbitStrokeWeight":"1","orbitOpacity":"0.7","orbitShow":"true","armColor":"#000000","armStrokeWeight":"1","armOpacity":"0.8","armShow":"true","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"}]',
            'user_id' => $user_id
        ]);

        DB::table('sketches')->insertGetId([
            'title' => 'Sample 3',
            'description' => 'Rainbow Unicorns',
            'public' => 'true',
            'featuredSeries' => 'false',
            'appSettings' => '{"plotXOffset":"400","plotYOffset":"400","currentT":"0","interval":"0.1","iterations":"20000","currentIteration":"0","plotScale":"1","cX":"0","cY":"0","endX":"0","endY":"0","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"}',
            'orbitDefs' => '[{"orbitDefId":"fry6h","n":"1","cX":"0","cY":"0","r":"50","phase":"0","a":"1","b":"1","fX":"r * cos((t * a) + phase)","fY":"r * sin((t * a) + phase)","endX":"0","endY":"0","orbitColor":"#FF0000","orbitStrokeWeight":"1","orbitOpacity":"0.7","orbitShow":"true","armColor":"#000000","armStrokeWeight":"1","armOpacity":"0.8","armShow":"true","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"},{"orbitDefId":"fvbt67","n":"1","cX":"0","cY":"0","r":"40","phase":"0","a":"1","b":"1","fX":"r * cos((t * a) + phase)","fY":"r * sin((t * a) + phase)","endX":"0","endY":"0","orbitColor":"#FF0000","orbitStrokeWeight":"1","orbitOpacity":"0.7","orbitShow":"true","armColor":"#000000","armStrokeWeight":"1","armOpacity":"0.8","armShow":"true","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"}]',
            'user_id' => $user_id
        ]);

        DB::table('sketches')->insertGetId([
            'title' => 'Sample 3',
            'description' => 'Blundering Idiots',
            'public' => 'false',
            'featuredSeries' => 'false',
            'appSettings' => '{"plotXOffset":"400","plotYOffset":"400","currentT":"0","interval":"0.1","iterations":"20000","currentIteration":"0","plotScale":"1","cX":"0","cY":"0","endX":"0","endY":"0","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"}',
            'orbitDefs' => '[{"orbitDefId":"vfr56","n":"1","cX":"0","cY":"0","r":"50","phase":"0","a":"1","b":"1","fX":"r * cos((t * a) + phase)","fY":"r * sin((t * a) + phase)","endX":"0","endY":"0","orbitColor":"#FF0000","orbitStrokeWeight":"1","orbitOpacity":"0.7","orbitShow":"true","armColor":"#000000","armStrokeWeight":"1","armOpacity":"0.8","armShow":"true","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"},{"orbitDefId":"fvrfyn","n":"1","cX":"0","cY":"0","r":"40","phase":"0","a":"1","b":"1","fX":"r * cos((t * a) + phase)","fY":"r * sin((t * a) + phase)","endX":"0","endY":"0","orbitColor":"#FF0000","orbitStrokeWeight":"1","orbitOpacity":"0.7","orbitShow":"true","armColor":"#000000","armStrokeWeight":"1","armOpacity":"0.8","armShow":"true","curveColor":"#0000FF","curveStrokeWeight":"1","curveOpacity":"1","curveShow":"true","penSize":"10","penShow":"true"}]',
            'user_id' => $user_id
        ]);


    }
}
