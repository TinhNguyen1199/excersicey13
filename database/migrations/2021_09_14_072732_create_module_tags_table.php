<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('module_id')->nullable(false);
            $table->foreign('module_id')->references('id')->on('academy_modules')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('tag_id')->nullable(false);           
            $table->foreign('tag_id')->references('id')->on('tags')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_tags');
    }
}
