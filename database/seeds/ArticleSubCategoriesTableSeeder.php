<?php

use Illuminate\Database\Seeder;

class ArticleSubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_sub_categories')->insert(
            array(
                ['category_id' => 1, 'name' => 'SUBПриемка'],
                ['category_id' => 1, 'name' => 'SUBРевизия'],
                ['category_id' => 1, 'name' => 'SUBОтчеты'],
                ['category_id' => 1, 'name' => 'SUBСистема лояльности'],
                ['category_id' => 2, 'name' => 'SUBПодписка'],
                ['category_id' => 2, 'name' => 'SUBКасса'],
                ['category_id' => 1, 'name' => 'SUBПродажи'],
                ['category_id' => 1, 'name' => 'SUBНоменклатура'],
                ['category_id' => 4, 'name' => 'SUBФинансы'],
                ['category_id' => 5, 'name' => 'SUBТовары'],
                ['category_id' => 4, 'name' => 'SUBСправочник'],
                ['category_id' => 5, 'name' => 'SUBAndroid касса']
            ));
    }
}
