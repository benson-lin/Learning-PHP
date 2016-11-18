<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;

class EloquentController extends Controller
{
 
// 方法一
// $data = ['code'=>200, 'msg'=>'add successful'];
// return json_encode ($data);

// 方法二
// $data = ['code'=>200, 'msg'=>'add successful'];
// return response()->json($data)
    public function insert()
    {

        DB::table('articles')->insert([
            ['title'=>'new title1','content'=>'new content1','user_id'=>1000],
            ['title'=>'new title2','content'=>'new content2','user_id'=>1001]
            ]);
        DB::table('articles')->insert(
            ['title'=>'new title3','content'=>'new content3','user_id'=>1003]
            );

        $id = DB::table('articles')->insertGetId(
            ['title'=>'new title4','content'=>'new content4','user_id'=>1004]
            );
        return json_encode (['id'=>$id]);
    }

    public function update()
    {
        DB::table('articles')->where('user_id', 2000)->update(['title'=>'update title']);
    }
    public function delete()
    {
        DB::table('articles')->where('id',"<",'3')->delete();
    }

    public function selectAll()
    {
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public function selectOne()
    {
        $articles = DB::table('articles')->where('user_id', '2')->first();
        return json_encode ($articles);
    }

    public function selectOneColumn()
    {
        $titles = DB::table('articles')->where('user_id','2')->lists('title');
        return json_encode ($titles);
    }

    public function count()
    {
        $count = DB::table('articles')->where('user_id','2')->count();

        return json_encode($count);
    }

    public function max()
    {
        $max_id = DB::table('articles')->where('content','hello')->max('user_id');
         return json_encode($max_id); 
    }

    public function avg()
    {
        $avg_id = DB::table('articles')->where('content','hello')->avg('user_id');
         return json_encode($avg_id); 
    }

}