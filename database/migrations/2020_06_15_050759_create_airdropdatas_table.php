<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirdropdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airdropdatas', function (Blueprint $table) {
            $table->id();
            $table->string('a_name');
            $table->string('est_value');
            $table->string('free_coin');
            $table->string('a_end');
            $table->string('a_url');
            $table->string('poll');
            $table->string('img_url');
            $table->string('tg')->nullable();
            $table->string('tw')->nullable();
            $table->string('li')->nullable();
            $table->string('mdm')->nullable();
            $table->string('yu')->nullable();
            $table->string('fb')->nullable();
            $table->string('kyc')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('pin');
            $table->string('r');
            $table->string('s1')->nullable();
            $table->string('s2')->nullable();
            $table->string('s3')->nullable();
            $table->string('s4')->nullable();
            $table->string('s5')->nullable();
            $table->string('ai');
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
        Schema::dropIfExists('airdropdatas');
    }
}