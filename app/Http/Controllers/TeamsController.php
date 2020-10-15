<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    //
    public function index(){
        return view('teams.index');
    }

    public function create()
    {
        return view('teams.create');
    }
    public function edit($id)
    {
        $data = [];

        if ($id ==5) {
            $data['team_name'] = "LHU";
            $data['team_city'] = "Taoyuang";
            $data['team_field'] = "Sky Field";
        }
        else{
            $data['team_name'] = "NotFound";
            $data['team_city'] = "NotFound";
            $data['team_field'] ="NotFound";
        }
        return view('teams.edit',$data);
    }
    public function show($id)
    {
        if ($id ==5) {
            $team_name = "LHU";
            $team_city = "Taoyuang";
            $team_field = "Sky Field";
        }
        else
        {
            $team_name = "NotFound";
            $team_city = "NotFound";
            $team_field ="NotFound";
        }
        return view('teams.show')->with
        (["name"=>$team_name,
            "city"=>$team_city,
            "field"=>$team_field
        ]);

    }

}
