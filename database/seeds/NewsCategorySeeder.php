<?php

use Illuminate\Database\Seeder;
use App\Models\News_category;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News_category::query()->insert([
            "title" => "Rov",
            "description" => "ข่าวสารเกียวกับ Realm of Valor",
            "created_at" => \Carbon\Carbon::create(),
        ]);
    }
}
