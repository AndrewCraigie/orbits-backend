<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            //$table->timestamp('created_at')->nullable();
        });

        Schema::create('sketches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('appSettings');
            $table->text('orbitDefs');
            $table->string('plotXOffset');
            $table->string('plotYOffset');
            $table->string('currentT');
            $table->string('interval');
            $table->string('iterations');
            $table->string('plotScale');
            $table->string('cX');
            $table->string('cY');
            $table->string('endX');
            $table->string('endY');
            $table->string('curveColor');
            $table->string('curveStrokeWeight');
            $table->string('curveOpacity');
            $table->string('curveShow');
            $table->string('penSize');
            $table->string('penShow');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        Schema::create('orbitdefs', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->increments('id');
            $table->string('n');
            $table->string('cX');
            $table->string('cY');
            $table->string('r');
            $table->string('phase');
            $table->string('a');
            $table->string('b');
            $table->string('fX');
            $table->string('fY');
            $table->string('endX');
            $table->string('endY');
            $table->string('orbitColor');
            $table->string('orbitStrokeWeight');
            $table->string('orbitOpacity');
            $table->string('orbitShow');
            $table->string('armColor');
            $table->string('armStrokeWeight');
            $table->string('armOpacity');
            $table->string('armShow');
            $table->string('curveColor');
            $table->string('curveStrokeWeight');
            $table->string('curveOpacity');
            $table->string('curveShow');
            $table->string('penSize');
            $table->string('penShow');
            $table->unsignedInteger('sketch_id');
            $table->foreign('sketch_id')
                ->references('id')->on('sketches')
                ->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orbitdefs');

        Schema::dropIfExists('sketches');

        Schema::dropIfExists('password_resets');

        Schema::dropIfExists('users');

    }
}
