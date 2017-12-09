<?php

namespace App\Http\Controllers;

use App\word;
use Illuminate\Http\Request;

class wordController extends Controller
{

    public function index(){
        //$words = word::all(); //Not a good idea
        //return $words;
        $randWord = $this->getRandomWord();
        return $randWord;
    }

    public function getRandomWord(){
        $random_word = word::all()->random(1);
        return $random_word;
    }

    public function checkIfWordIsCorrect($given_word,$correct_word){
        if($given_word == $correct_word){
            return true;
        }else{
            return false;
        }
    }



    //
}
