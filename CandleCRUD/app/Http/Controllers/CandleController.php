<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candle;

class CandleController extends Controller
{
    public function index(){
        $search = request('search');
        if($search){
            $candles = Candle::where([['name','like','%'.$search.'%']])->get();
        }else{
            $candles = Candle::all();
        }
        return view('welcome',['candles' => $candles, 'search' => $search]);
    }

    public function create(){
        return view('candles.create');
    }

    public function edit(){
        $candles = Candle::all();
        return view('candles.edit', ['candles' => $candles]);
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

    public function destroy($id){
        Candle::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'Vela excluida com sucesso');
    }

    public function editUpdate($id){
        $candle = Candle::findOrFail($id);
        return view('candles.editUpdate', ['candle' => $candle]);
    }
    
}
