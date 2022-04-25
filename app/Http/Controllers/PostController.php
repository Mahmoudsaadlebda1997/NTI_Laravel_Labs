<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;

class PostController extends Controller
{
    function Create(){
        return view('task');
    }
    function Store(Request $request){
        try{
            $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        dd($validated);
        }
        catch (\Throwable $th){
            echo "Enter Data To Create The Content";
        }
    }
}
