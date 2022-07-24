<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandleController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function create(){
        return view('candles.create');
    }

    public function delete(){
        return view('candles.delete');
    }

    public function list(){
        return view('candles.list');
    }
}
