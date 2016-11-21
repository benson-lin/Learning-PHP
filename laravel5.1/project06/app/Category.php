<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// 可以自定义表名
    protected $table = 'categories';

    // 不希望让 Eloquent 来自动维护这两个字段
    public $timestamps = false;

    protected $connection = 'mysql';


}
