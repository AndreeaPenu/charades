<?php

namespace App\Http\Controllers;

use App\session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function start($username){
        $string=$this->generateRandomString(10);
        $exists=DB::table('sessions')->where('session_key','=',$string)->get();
        if($exists!= null) {
            DB::table('sessions')->insert([
                'session_key' => $string
            ]);
            $id = DB::table('sessions')->where('session_key', '=', $string)->get();

            $ip = request()->ip();
            DB::table('participators')->insert([
                'name' => $username,
                'ip' => $ip,
                'active' => 1,
                'color' => 'red',
                'session_id' => $id[0]->id,
            ]);
        }
        else{
            print_r('bestaat al');
        }
        return $string;


    }
    public function generateRandomString($length) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    //
}
