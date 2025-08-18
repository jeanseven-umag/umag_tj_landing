<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDislikeColumnsToKnowledgeBaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('knowledge_base', function (Blueprint $table) {
            $table->bigInteger('dislike_count_ios')->nullable();
            $table->bigInteger('dislike_count_android')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('knowledge_base', function (Blueprint $table) {
            $table->dropColumn('dislike_count_ios');
            $table->dropColumn('dislike_count_android');
            
        });
    }
}
