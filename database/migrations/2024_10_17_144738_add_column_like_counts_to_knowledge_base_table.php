<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnLikeCountsToKnowledgeBaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('knowledge_base', function (Blueprint $table) {
            $table->bigInteger('like_count_ios')->nullable();
            $table->bigInteger('like_count_android')->nullable();
        });

        Schema::table('survey_results', function (Blueprint $table) {
            $table->bigInteger('knowledge_base_id')->nullable();
            $table->string('link')->nullable();

            // Optional: Add foreign key constraint
            // $table->foreign('knowledge_base_id')->references('id')->on('knowledge_base')->onDelete('cascade');
            
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
            $table->dropColumn('like_count_ios');
            $table->dropColumn('like_count_android');
            
        });

        Schema::table('survey_results', function (Blueprint $table) {
            $table->dropColumn('knowledge_base_id');
            $table->dropColumn('link');
            
        });
    }
}
