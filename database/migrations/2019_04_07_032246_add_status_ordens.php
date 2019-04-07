<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusOrdens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('ordens', function (Blueprint $table) {
            $table->string('status')->nullable();
            $table->string('reference_pol')->nullable();
            $table->string('reference_sale')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('ordens', function (Blueprint $table) {
            $table->dropColumn(['status','reference_pol','reference_sale']);
           
        });
    }
}
