<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categories')->delete();
       
        $this->all();
    }

    public function update1()
    {
        $category = Category::find(3);
        $category->name = 'New Name';
        $category->save();
    }

    public function update2()
    {
        $category = Category::where('name','like','c%')
                ->where('id','>','5')
                ->update(['name'=>'c8888']);
    }
    public function insert1()
    {
        $category = new Category;
        $category->name='c3';
        $category->created_at = date('Y-m-d H:i:s',time());
        $category->updated_at = date('Y-m-d H:i:s',time());
        $category->save();
    }   
    public function insert2()
    {
        $now = date('Y-m-d H:i:s',time());
        Category::create(['name'=>'v9','created_at'=>$now, 'updated_at'=>$now]);
    }   

    public function delete1()
    {
        $category = Category::find(9);
        $category->delete();
    }


    public function delete2()
    {
        Category::destroy([10,11]);
        // Category::destroy(10,11);
        Category::destroy(10);
    }

    public function delete3()
    {
        Category::where('name','9999')->delete();
    }

    public function all()
    {
        $categories = Category::all();

        // foreach ($categories as $key => $value) {
             // echo $key;//0 1 2 3 4...下标
             // echo $value;//真正的keyvalue
             //{"id":3,"name":"New Name","created_at":"2016-11-21 02:57:04","updated_at":"2016-11-21 02:57:04"}{"id":4,"name":"c3","created_at":"2016-11-21 02:58:04","updated_at":"2016-11-21 02:58:04"}....
             // echo $value->name;
        // }
        foreach ($categories as $category) {//$category=$value，not $key
             echo $category->name;
        }

       
    }
}
