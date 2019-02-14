<?php

use Illuminate\Database\Seeder;

class SketchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sketches')->insert([
            'title' => 'Sample',
            'plotXOffset' => '400',
            'plotYOffset' => '400',
            'currentT' => '0',
            'interval' => '0.1',
            'iterations' => '20000',
            'plotScale' => '1',
            'cX' => '0',
            'cY' => '0',
            'curveColor' => '#0000FF',
            'curveStrokeWeight' => '1',
            'curveOpacity' => '1',
            'curveShow' => 'true',
            'penSize' => '10',
            'penShow' => 'true',
            'user_id' => 1
        ]);
    }
}
