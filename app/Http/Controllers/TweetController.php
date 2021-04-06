<?php

namespace App\Http\Controllers;
use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    //
    public function index()
    {
        //dump(auth()->user()->sanityTest());
        //$tweets = Tweet::latest()->get();
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline() //defined at runtime
        ]);
    }

    public function store()
    {
        $request = request()->validate(['body'=> 'required|max:255']);
        Tweet::factory()->create([ //no global in laravel 8, must call factory directly
            'user_id' => auth()->id(),
            'body' => $request['body']
        ]);

        return redirect()->route('home');
    }

}
