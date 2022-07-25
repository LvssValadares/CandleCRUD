<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candle;

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
        $candles = Candle::all();
        return view('candles.list',['candles' => $candles]);
    }

    public function store(Request $request){
        $candle = new Candle;
        $candle->name = $request->name;
        $candle->qtd = $request->qtd;
        $candle->fragrance = $request->fragrance;
        $candle->description = $request->description;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() .
             strtotime("now")) . "." . $extension;
            $request->image->move(public_path('img/candles'), $imageName);
            $candle->image = $imageName;
        }

        $candle->save();

        return redirect('/')->with('msg','Vela Adicionada com Sucesso!');
    }

    public function show($id){
        $candle = Candle::findOrFail($id);
        return view('candles.show', ['candle' => $candle]);
    }
}
