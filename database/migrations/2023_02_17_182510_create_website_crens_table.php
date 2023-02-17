<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteCrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_crens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idWebsite');
            $table->foreign('idWebsite')->references('id')->on('websites');
            $table->unsignedBigInteger('idCren');
            $table->foreign('idCren')->references('id')->on('credentials');
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
        Schema::dropIfExists('website_crens');
    }
}
