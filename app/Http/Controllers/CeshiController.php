<?php

namespace App\Http\Controllers;


use App\Ssss;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CeshiController extends  Controller{
    public  function wenz(){
        return view('ceshi.wenz');
    }

    public  function biaod(){
        return view('ceshi.biaod');
    }


    public  function zhuye(){
        return view('ceshi.zhuye');
    }


    public  function dengl(){
    return view('ceshi.dengl');

}




    public function goin(Request $request)
    {
       $post=new \App\Models\user();

      //$post =$post-> find(2);
        //$post->name = 'test 2 title';

//        if($post->delete()){
//            echo '添加文章成功！';
//        }else{
//            echo '添加文章失败！';
//        }
        $aa=$post->get();

        dd( $aa[0]['id']);




        //
    }

    public  function lieb(){


       // $users = DB::table('ssss')->insert(['name'=>'qqq','age'=>14]);

       // $users = DB::table('ssss')->where('id',2)->update(['age'=>15]);
       // $users = DB::table('ssss')->where('id',2)->delete();

        $users = DB::table('ssss')->get();
       // $users = DB::table('ssss')->first();

        var_dump($users);
    }


}