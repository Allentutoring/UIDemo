<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ui_condition_group', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ui_element_id')->nullable(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('ui_element_id')->on('ui_elements')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ui_condition_group', function (Blueprint $table) {
            $table->dropConstrainedForeignId('ui_element_id');
            $table->dropIfExists();
        });
    }
};
