<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServerWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('server_websites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idWebsite');
            $table->foreign('idWebsite')->references('id')->on('websites');
            $table->unsignedBigInteger('idServer');
            $table->foreign('idServer')->references('id')->on('servers');
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
        Schema::dropIfExists('server_websites');
    }
}
