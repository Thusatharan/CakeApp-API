<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create( [
            'id'=>1,
            'name'=>'Birthday',
            'description'=>'This is sample discription containing lorem ipsum',
            'image'=>'apiCategory/birthday.png',
            'created_at'=>'2022-02-21 16:13:42',
            'updated_at'=>'2022-02-21 16:13:42'
            ] );
            
            
                        
            Category::create( [
            'id'=>2,
            'name'=>'Wedding',
            'description'=>'This is sample discription containing lorem ipsum',
            'image'=>'apiCategory/wedding.png',
            'created_at'=>'2022-02-21 16:21:03',
            'updated_at'=>'2022-02-21 16:21:03'
            ] );
    }
}
