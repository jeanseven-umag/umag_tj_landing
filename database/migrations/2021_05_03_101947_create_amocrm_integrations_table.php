<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmocrmIntegrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('amocrm_integrations')) return;

        Schema::create('amocrm_integrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('city');
            $table->string('name')->unique();
            $table->index('name');
            $table->string('client_id');
            $table->string('client_secret');
            $table->text('code')->comment('Expired auto 20 minutes. You have got access token before');
            $table->string('redirect_url');
            $table->string('domain');
            $table->integer('send_status')->index()->default(0);
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
        Schema::dropIfExists('amocrm_integrations');
    }
}
