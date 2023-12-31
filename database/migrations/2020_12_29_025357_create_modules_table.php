<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('path');
            $table->string('alias')->nullable();
            $table->string('version')->default('1.0.0');
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->text('providers')->nullable();
            $table->text('aliases')->nullable();
            $table->text('files')->nullable();
            $table->text('requires')->nullable();
            $table->integer('priority')->default(0);
            $table->nullableTimestamps();
        });
        /**
         * Insert ModuleManager Module into Database.
         */
        // DB::table('modules')->insert(
        //     array(
        //         'id' => 1,
        //         'name' => 'ModuleManager',
        //         'path' => base_path().'/Modules/ModuleManager',
        //         'alias' => 'modulemanager',
        //         'version' => '1.0.0',
        //         'description' => 'This Module for Module Management',
        //         'keywords' => '[]',
        //         'is_active' => 1,
        //         'order' => 0,
        //         'providers' => '["Modules\\\\ModuleManager\\\\Providers\\\\ModuleManagerServiceProvider"]',
        //         'aliases' => null,
        //         'files' => null,
        //         'requires' => '[]',
        //         'priority' => 0,
        //         'created_at' => null,
        //         'updated_at' => null
        //     )
        // );
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
