<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
             $table->string('lat', 100);
            $table->string('long', 100);
            $table->string('mainImage', 255)->nullable();
            $table->string('imageDetected', 255)->nullable();
            $table->string('video', 255)->nullable();
            $table->string('priority', 100);
            $table->string('Solution', 100);
            $table->string('Material', 100);
            $table->string('Cost', 100);
            $table->string('date', 100);
            $table->string('address', 100);
            $table->foreignId('sevirity_id')->constrained();
            $table->foreignId('request_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->json('demageTypes', 100)->nullable();
            $table->json('potholeTypes', 100)->nullable();
            $table->json('potholeWidth', 100)->nullable();
            $table->json('potholeHeight', 100)->nullable();
            $table->json('potholeScores', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
