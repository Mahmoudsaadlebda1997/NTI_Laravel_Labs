<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Cookie;

class PostController extends Controller
{
    function Create(){
        return view('task');
    }
    function Store(Request $request){

           $validated = $request->validate([
            'title' => 'required|string|regex:/^[A-Za-z]/',
            'content' => 'required|min:50',
            'image' => 'required|file|image'
            
        ]);
        if($file = $request->hasFile('image')) {
            $imageType    = $_FILES['image']['type'];
            $typesInfo  =  explode('/', $imageType);    
            $extension  =  strtolower(end($typesInfo));      
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName() ;
            $FinalName = time() . rand() . '.' . $extension;
            $destinationPath = public_path().'/images' ;
            $file->move($destinationPath,$FinalName);
    }
        $form_data['title'] = $request->title;
        $form_data['content'] = $request->content;
        $form_data['image'] = $FinalName;
        $cookie = Cookie::make('title', $form_data['title'], 120);
        $cookie = Cookie::make('content', $form_data['content'], 120);
        $cookie = Cookie::make('image', $form_data['image'], 120);
        return view('show', compact('form_data'));

    }
}
