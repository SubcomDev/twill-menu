<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTables extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
            $table->string('location')->nullable();
            $table->string('default', 200)->default(0);
        });

        Schema::create('menu_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'menus');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('menu_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'menus');
        });

        Schema::create('menu_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'menus');
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_revisions');
        Schema::dropIfExists('menu_translations');
        Schema::dropIfExists('menu_slugs');
        Schema::dropIfExists('menus');
    }
}
