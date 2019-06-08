<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'cat_name'=>'About',
            'order'=>8
        ]);
        Category::create([
            'cat_name'=>'Contact',
            'order'=>9
        ]);
    }
}
