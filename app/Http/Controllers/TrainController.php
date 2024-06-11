<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trainList = Train::all();

        return view('train', compact('trainList'));
    }
}
