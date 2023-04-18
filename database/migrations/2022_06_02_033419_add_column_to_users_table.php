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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::table('users', function (Blueprint $table) {
            $table->string('img_url');
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->text('intro')->nullable();
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('img_url');
            $table->dropColumn('gender')->nullable(false);
            $table->dropColumn('age')->nullable(false);
            $table->dropColumn('intro')->nullable(false);
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};
