<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->insert([
            [
                'code' => 'ALA',
                'name' => 'Алматы',
                'created_at' => new DateTime,
            ],
            [
                'code' => 'AST',
                'name' => 'Астана',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'CIT',
                'name' => 'Шымкент',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'KAR',
                'name' => 'Караганда',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'PET',
                'name' => 'Петропавловск',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'PAV',
                'name' => 'Павлодар',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'TAR',
                'name' => 'Тараз',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'KYZ',
                'name' => 'Кызылорда',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'ZHE',
                'name' => 'Жезказган',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'URA',
                'name' => 'Уральск',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'AKT',
                'name' => 'Актобе',
                'created_at' => new DateTime,
            ],
            [
                'code' => 'AKU',
                'name' => 'Актау',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'ATR',
                'name' => 'Атырау',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'TAL',
                'name' => 'Талдыкорган',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'KOK',
                'name' => 'Кокшетау',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'KOS',
                'name' => 'Костанай',
                'created_at' => new DateTime,
            ], 
            [
                'code' => 'PLX',
                'name' => 'Семей',
                'created_at' => new DateTime,
            ],
            [
                'code' => 'UKK',
                'name' => 'Усть-Каменогорск',
                'created_at' => new DateTime,
            ],
        ]);
    }
}