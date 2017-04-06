<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/14
 * Time: 10:50
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Paper extends Model {



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paper';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'title', 'content','updated_at','kind','created_at'];

    protected $hidden = ['updated_at', 'created_at'];


}