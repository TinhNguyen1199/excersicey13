<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademyModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academy_modules', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable(false);
            $table->string('slug',255)->nullable(false);
            $table->text('description')->nullable();
            $table->integer('order')->nullable(false)->default('0');
            $table->text('banner_image')->nullable();
            $table->integer('parent_id')->nullable(false)->default('0');
            $table->text('sub_modules_intro')->nullable();
            $table->text('disclaimer')->nullable();
            $table->smallInteger('visible')->nullable(false)->default('1');
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
        Schema::dropIfExists('academy_modules');
    }
}
