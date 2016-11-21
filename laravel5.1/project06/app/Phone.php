<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    // 可以自定义表名
    protected $table = 'phone';

    // 不希望让 Eloquent 来自动维护这两个字段
    public $timestamps = false;

    protected $connection = 'mysql';

    public function phoneUser()
    {
    	return $this->belongsTo('\App\User','user_id','id');
    }
}
