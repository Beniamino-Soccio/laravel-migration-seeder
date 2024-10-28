<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        // $trains = train::where("Data_di_partenza", "2024-10-25")->get();
        $trains = train::all();
        return view("trains.index", compact("trains"));
    }
}
