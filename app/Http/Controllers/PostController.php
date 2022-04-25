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

        //     $validated = $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        // ]);
        // dd($validated);

           $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $form_data['title'] = $request->title;
        $form_data['content'] = $request->content;
        return view('show', compact('form_data'));

    }
}
