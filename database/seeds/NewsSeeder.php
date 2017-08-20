<?php

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::query()->insert([
            "owner_id" => 1,
            "news_category_id" => 1,
            "title" => "ทดสอบข่าวสาร...",
            "description" => "คำอธิบาย",
            "profileImage" => "https://lh3.ggpht.com/JNwy9Jc8NZ2b_BPKM-a15_z0FbJijLAVD46Da-CyVepkXqrIZ2QnrOFWyfc0rQLpI6s=h310-rw",
            "html" => "SEEDER",
            "created_at" => \Carbon\Carbon::create(),
        ]);
    }
}
