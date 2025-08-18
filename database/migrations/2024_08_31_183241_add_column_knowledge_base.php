<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnKnowledgeBase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('knowledge_base', function (Blueprint $table) {
            // Add columns only if they do not already exist
            if (!Schema::hasColumn('knowledge_base', 'like_count')) {
                $table->bigInteger('like_count')->nullable();
            }
            if (!Schema::hasColumn('knowledge_base', 'dislike_count')) {
                $table->bigInteger('dislike_count')->nullable();
            }
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
            // Drop columns only if they exist
            if (Schema::hasColumn('knowledge_base', 'like_count')) {
                $table->dropColumn('like_count');
            }
            if (Schema::hasColumn('knowledge_base', 'dislike_count')) {
                $table->dropColumn('dislike_count');
            }
        });
    }
}
