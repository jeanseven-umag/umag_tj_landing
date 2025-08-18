<?php

use Illuminate\Database\Seeder;

class ArticleCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_categories')->insert(
            array(
                ['name' => 'Приемка'],
                ['name' => 'Ревизия'],
                ['name' => 'Отчеты'],
                ['name' => 'Система лояльности'],
                ['name' => 'Подписка'],
                ['name' => 'Касса'],
                ['name' => 'Продажи'],
                ['name' => 'Номенклатура'],
                ['name' => 'Финансы'],
                ['name' => 'Товары'],
                ['name' => 'Справочник'],
                ['name' => 'Android касса']
            )
        );
    }
}
