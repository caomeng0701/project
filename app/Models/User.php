<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //laravel里一个模型队用一个数据表
    //规定属性  模型关联的数据表
    protected $table="users";
    //该模型是否需要自动维护时间戳 false 否 true 是
    public $timestamps = false;
    //可以被批量复制属性(字段)
    protected $fillable=['username','password','email','status','token','phone'];
}
