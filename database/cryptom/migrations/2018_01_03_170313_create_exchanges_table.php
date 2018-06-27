<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Exchange;

class CreateExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique()->default(Exchange::BLANK);
            $table->string('url')->unique()->default(Exchange::BLANK);
            $table->string('api')->default(Exchange::BLANK);
            $table->string('email')->default(Exchange::BLANK);
            $table->string('zapo')->default(Exchange::BLANK);
            $table->string('zap')->default(Exchange::BLANK);
            $table->string('active')->default(Exchange::ACTIVE);
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
        Schema::dropIfExists('exchanges');
    }
}
