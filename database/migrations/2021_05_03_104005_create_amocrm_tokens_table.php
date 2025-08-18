<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmocrmTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('amocrm_tokens')) return;

        Schema::create('amocrm_tokens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('integration_id');
            $table->foreign('integration_id')->references('id')->on('amocrm_integrations');
            $table->text('access_token');
            $table->text('refresh_token');
            $table->integer('expires_in')->comment('Token expired time');
            $table->integer('expired_time')->comment('Our. token refresh time')->nullable();
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
        Schema::dropIfExists('amocrm_tokens');
    }
}
