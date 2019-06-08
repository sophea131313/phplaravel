<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'tag_name'=>'Solution'
        ]);
        Tag::create([
            'tag_name'=>'Web Development'
        ]);
    }
}
