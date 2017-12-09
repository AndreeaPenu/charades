<?php

namespace App\Http\Controllers;

use App\word;
use Illuminate\Http\Request;
use App\participator;
use Illuminate\Support\Facades\DB;

class ParticipatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( $username , $session_id)
    {
        $id = DB::table('sessions')->where('session_key', '=', $session_id)->get();
            $ip = request()->ip();
            DB::table('participators')->insert([
                'name' => $username,
                'ip' => $ip,
                'active' => 1,
                'color' => 'red',
                'session_id' => $id[0]->id,
            ]);
    }

/*    public function winner(){
        $randWord = $this->getRandomWord();
        $winner = $this->checkIfWordIsCorrect($randWord,$givenWord);

        if($winner){
            $current_active = participator::all()->active(1);
            $new_active = Participator::all()->active(0)->first();

            $this->setActive($current_active,$new_active);
        }
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

    public function setActive(Participator $current_active ,Participator $new_active){
        $current_active->active=0;
        $new_active->active=1;
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
