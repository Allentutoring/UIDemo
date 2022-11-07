<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ui_conditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ui_element_id')->nullable(false);
            $table->enum('types', [
                'request', 'response'
            ])->nullable(false)->comment('ui 값을 생성하는데 설정하는 조건 종류, request : 요청 값에 조건을 설정, response : 결과 값에 조건을 설정');
            $table->enum('operator', ['equals', 'contains', 'exclude'])->nullable(false);
            $table->string('target', 128)->comment('value 값을 비교할 key, ex) data.user.id')->nullable(false);
            $table->string('value', 128)->nullable(false);
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
        Schema::table('ui_conditions', function (Blueprint $table) {
            $table->dropConstrainedForeignId('ui_element_id');
            $table->dropIfExists();
        });
    }
};