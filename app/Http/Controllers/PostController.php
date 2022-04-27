<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Cookie;
use App\Models\Blog;

class PostController extends Controller
{
    function Create(){
        return view('task');
    }
    function Store(Request $request){

           $validated = $request->validate([
            'title' => 'required|string|regex:/^[A-Za-z]/',
            'content' => 'required|min:50',
            'image' => 'required|file|image|mimes:png,jpg,jpeg'
            
        ]);

    $image = $request->file('image');
    $image_name = $image->getClientOriginalName();
    $image->move(public_path('/images'),$image_name);

    $validated['image'] = $image_name;



        $op = Blog ::create($validated);
        if($op){
            dd('Raw Inserted');
        }else{
            dd('Error Try Again');
        }
        
    }
    function  index(){

        $data =  Blog :: get();  // select * from users 
          
        return view('show',['data' => $data]);
    }
}
