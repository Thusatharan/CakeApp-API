<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create( [
            'id'=>1,
            'name'=>'Chocolate Layer',
            'price'=>1200,
            'description'=>'This is sample discription containing lorem ipsum',
            'image'=>'apiProduct/photo-1578985545062-69928b1d9587.jpg',
            'category_id'=>1,
            'isActive'=>1,
            'created_at'=>'2022-02-21 16:51:01',
            'updated_at'=>'2022-02-21 16:51:01'
            ] );
            
            
                        
            Product::create( [
            'id'=>2,
            'name'=>'Yellow Layer',
            'price'=>900,
            'description'=>'This is sample discription containing lorem ipsum',
            'image'=>'apiProduct/lucious-butter-scotch-cake_large.jpg',
            'category_id'=>1,
            'isActive'=>1,
            'created_at'=>'2022-02-21 16:51:59',
            'updated_at'=>'2022-02-21 16:51:59'
            ] );
            
            
                        
            Product::create( [
            'id'=>3,
            'name'=>'Rounded Chocolate',
            'price'=>1600,
            'description'=>'This is sample discription containing lorem ipsum',
            'image'=>'apiProduct/chocolate-ice-cream-cake-selective-focus-chocolate-ice-cream-cake-175643276.jpg',
            'category_id'=>1,
            'isActive'=>1,
            'created_at'=>'2022-02-21 16:52:43',
            'updated_at'=>'2022-02-21 16:52:43'
            ] );
            
            
                        
            Product::create( [
            'id'=>4,
            'name'=>'Fully Creamed Chocolate',
            'price'=>2400,
            'description'=>'This is sample discription containing lorem ipsum',
            'image'=>'apiProduct/ee85bdc2fa308c202da7ae651a614d7f.jpg',
            'category_id'=>1,
            'isActive'=>1,
            'created_at'=>'2022-02-21 16:53:29',
            'updated_at'=>'2022-02-21 16:53:29'
            ] );
            
            
                        
            Product::create( [
            'id'=>5,
            'name'=>'Pink Vanilla',
            'price'=>6500,
            'description'=>'This is sample discription containing lorem ipsum',
            'image'=>'apiProduct/a083e9896b1a818d56981c6e1431651e.jpg',
            'category_id'=>2,
            'isActive'=>1,
            'created_at'=>'2022-02-21 16:54:00',
            'updated_at'=>'2022-02-21 16:54:00'
            ] );
            
            
                        
            Product::create( [
            'id'=>6,
            'name'=>'Full Creamed Purple',
            'price'=>7200,
            'description'=>'This is sample discription containing lorem ipsum',
            'image'=>'apiProduct/485310137fca62cc5a516e91abcaecfc.jpg',
            'category_id'=>2,
            'isActive'=>1,
            'created_at'=>'2022-02-21 16:54:45',
            'updated_at'=>'2022-02-21 16:54:45'
            ] );
            
            
                        
            Product::create( [
            'id'=>7,
            'name'=>'Western Chocolate',
            'price'=>9400,
            'description'=>'This is sample discription containing lorem ipsum',
            'image'=>'apiProduct/900_3uL7pjxlD7-naked-birch-3tier-wedding-cake.jpg',
            'category_id'=>2,
            'isActive'=>1,
            'created_at'=>'2022-02-21 16:55:15',
            'updated_at'=>'2022-02-21 16:55:15'
            ] );
            
            
                        
            Product::create( [
            'id'=>8,
            'name'=>'Pure Purple Creamed',
            'price'=>10200,
            'description'=>'This is sample discription containing lorem ipsum',
            'image'=>'apiProduct/601-big-white-cake-richely-decorated-many-flowers.jpg',
            'category_id'=>2,
            'isActive'=>1,
            'created_at'=>'2022-02-21 16:56:00',
            'updated_at'=>'2022-02-21 16:56:00'
            ] );
    }
}
