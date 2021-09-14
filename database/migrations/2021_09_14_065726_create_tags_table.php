<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable(false);
            $table->string('type',255)->nullable();
            $table->string('slug',255)->nullable(false);
            $table->text('description')->nullable();
            $table->string('banner_image',255)->nullable();
            $table->string('thumb_image',255)->nullable();
            $table->string('icon',255)->nullable();
            $table->softDeletes('deleted_at', 0);
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
        Schema::dropIfExists('tags');
    }
}
