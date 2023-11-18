<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function dash(){
        return view('dashboard.dash');
    }
    public function task(){
        return view('dashboard.taskes');
    }


    public function plan(){
        return view('dashboard.plan');
    }
    public function note(){
        return view('dashboard.note');

}
}
