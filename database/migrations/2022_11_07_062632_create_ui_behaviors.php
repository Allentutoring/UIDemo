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
        Schema::create('ui_behaviors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ui_condition_group_id')->nullable(false);
            $table->string('attribute', '32')->nullable(false)->comment('$(target).attr(?, val) ? 에 들어갈 값');
            $table->mediumText('value')->nullable(false)->comment('$(target).attr(attribute, ?) ? 에 들어갈 값');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('ui_condition_group_id')->on('ui_condition_group')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ui_behaviors', function (Blueprint $table) {
            $table->dropConstrainedForeignId('ui_condition_group_id');
            $table->dropIfExists();
        });
    }
};
