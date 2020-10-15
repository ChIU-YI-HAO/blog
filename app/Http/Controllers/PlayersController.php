<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    //
    public function index()
    {
        return view('players.index');
    }
    public function create()
    {
        return view('players.create');
    }
    public function show()
    {
        return view('players.show');
    }
    public function edit($id)
    {
        if ($id ==5) {
            $player_name = "哥布林";
            $player_country = "異世界";
            $player_position = "洞穴";
        }
        else
        {
            $player_name = "NA";
            $player_country = "NA";
            $player_position ="NA";
        }
        $data = compact('player_name','player_country', 'player_position');
        return view('players.edit' , $data);
    }
}
