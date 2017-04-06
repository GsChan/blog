<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/29
 * Time: 15:42
 */

namespace App\Http\Controllers;


use App\Models\Paper;
use App\User;
use Illuminate\Http\Request;

class PaperController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function test(Request $request){
        $name = $request->all();
        $paper = array(
            'title'=>'标题',
            'content'=>'内容',
            'created_at'=>time(),
            'updated_at'=>time()
        );
        $result = Paper::create($paper);

        return Paper::all();
    }

}