<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowledgeBaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowledge_base', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title'); // Заголовок инструкции
            $table->string('link'); // Заголовок инструкции
            $table->longText('description')->nullable(); // Время прочтения
            $table->string('read_time')->nullable(); // Время прочтения
            $table->integer('category_id'); 
            $table->longText('web_content'); // Основное содержание инструкции
            $table->longText('ios_content'); // Основное содержание инструкции
            $table->longText('android_content'); // Основное содержание инструкции
            $table->longText('video_url')->nullable(); // URL для видеоурока
            $table->longText('faq_web')->nullable(); // URL для часто задаваемых вопросов
            $table->longText('faq_ios')->nullable(); // URL для часто задаваемых вопросов
            $table->longText('faq_android')->nullable(); // URL для часто задаваемых вопросов
            $table->enum('status', ['draft', 'published'])->default('draft'); // Статус инструкции (черновик или опубликована)
            $table->boolean('is_public')->default(false); // Флаг для показа всем пользователям или только авторизованным
            $table->softDeletes();
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
        Schema::dropIfExists('knowledge_base');
    }
}
