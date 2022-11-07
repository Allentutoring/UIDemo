<?php

use App\Models\UIInformation;
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
        Schema::create('ui_elements', function (Blueprint $table) {
            $table->id();
            $table->string('ui_information_code', '256')->nullable(false);
            $table->string('lang', '8')->nullable(false);
            $table->string('target', '32')->nullable(false)->comment('html tag 의 id 같은 selector 를 설정');
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['ui_information_code', 'lang', 'target']);
            $table->foreign('ui_information_code')->on('ui_information')->references('code')->cascadeOnDelete();
            $table->foreign('lang')->on('lang')->references('code')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ui_elements', function (Blueprint $table) {
            $table->dropConstrainedForeignId('ui_information_code');
            $table->dropConstrainedForeignId('lang');
            $table->dropIfExists();
        });
    }
};
