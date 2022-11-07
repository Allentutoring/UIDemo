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
            $table->string('parent', '256')->nullable(false);
            $table->string('lang', '8')->nullable(false);
            $table->string('target', '32')->nullable(false)->comment('html tag 의 id 같은 selector 를 설정');
            $table->string('val', '256')->nullable(false);
            $table->timestamps();

            $table->unique(['parent', 'lang', 'target']);
            $table->foreign('parent')->on('ui_information')->references('key')->cascadeOnDelete();
            $table->foreign('lang')->on('lang')->references('key')->cascadeOnDelete();
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
            $table->dropConstrainedForeignId('parent');
            $table->dropConstrainedForeignId('lang');
            $table->dropIfExists();
        });
    }
};
