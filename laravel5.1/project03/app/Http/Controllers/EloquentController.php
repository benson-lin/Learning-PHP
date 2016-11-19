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

    public function where()
    {

        $users1 = DB::table('articles')->where('id','>','8')->get();//<>  >= <=

        $users2 = DB::table('articles')->where('content','like','new%')->get();

        // and 5.1没有数组形式的
        // $users3 = DB::table('articles')->where([
        //     ['id', '>', 17],
        //     ['user_id','=','1000'],
        //     ])->get();

        $users3 = DB::table('articles')->where('id', '>', 5)->where('user_id','1000')->get();

        //is null
        $users4 = DB::table('articles')->whereNull('content')->get();
        //or
        $users5 = DB::table('articles')->where('id','<=','4')->orWhere('user_id',1000)->get();
        // between a and b
        $users6 = DB::table('articles')->whereBetween('id',[8,15])->get();
        // not between a and b
        // $users7 = DB::table('articles')->whereNotBetween('id',[8,15])->get();
        // in
        $users8 = DB::table('articles')->whereIn('id', [8,9,10,11])->get();
        // not in
        // $users9 = DB::table('articles')->whereNotIn('id', [8,9,10,11])->get();

        // 5.1没有
        // compare date, month, day
        // whereDate('created_at', '2016-10-10')
        // whereMonth('created_at', '10')
        // whereDay('created_at', '10')
        // whereYear('created_at', '2016')
        // $users9 = DB::table('articles')
        //         ->whereDay('created_at', '11')
        //         ->get();


        // select * from articles where id >=5 and (user_id = 1000 or content like 'null%') 
        $users10 = DB::table('articles')
                  ->where('id','>=',5)
                  ->where(function ($query) {
                        $query->where('user_id', 1000)
                              ->orwhere('id', 'like', 'null%');
                    })
                 ->get();


        $res = [
            '>' => $users1,
            'like' => $users2,
            'and' => $users3,
            'is null' => $users4,
            'or' => $users5,
            'between' => $users6,
            'in' => $users8,
            'a and (b or c)' => $users10,
        ];

        return json_encode($res); 
    }

    public function orderBy(){
        $users = DB::table('articles')
                ->orderBy('user_id', 'desc')
                ->get();
        return json_encode($users);
    }

    public function groupByHaving()
    {
        $users = DB::table('articles')
                ->select(DB::raw('id, avg(id) as avg'))
                ->whereIn('id', [5,15,16,17,18,19])
                ->groupBy('user_id')
                // ->having('account_id', '>', 100)
                ->get();
        return json_encode($users);
    }

    public function join()
    {
        // 还有leftJoin, rightJoin
        // select `articles`.`user_id`, `users`.`email`, `articles as ariticle_id`.`id`, `articles`.`title` from `articles` inner join `users` on `articles`.`user_id` = `users`.`id`
        $users = DB::table('articles')
                 ->join('users', 'articles.user_id', '=', 'users.id')
                 ->select('articles.user_id','users.email','articles.id as ariticle_id','articles.title')
                 ->get();
        return json_encode($users);
    }
}