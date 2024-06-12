<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{

    public function index(){
        // SELECT * FROM `trains` WHERE DAY(`data_partenza`) >= DAY(NOW());
        $trainList = Train::whereRaw("DAY(data_partenza) >= DAY(NOW())")->get();

        return view('train', compact('trainList'));
    }
}
