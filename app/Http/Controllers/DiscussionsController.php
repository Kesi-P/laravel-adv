<?php

namespace App\Http\Controllers;

use Auth;
use App\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscussionsController extends Controller
{
    public function create(){

      return View('discuss');
    }

    public function store(){
      $this->validate(request(), [
        'channel_id' => 'required',
        'content' => 'required',
        'title' =>'required'
      ]);

      $discussion = Discussion::create([
        'title' => request()->title,
        'content' => request()->content,
        'channel_id' => request()->channel_id,
        'user_id' => Auth::id(),
        'slug' => Str::slug(request()->title)
      ]);

      return redirect()->route('discussion',['slug' => $discussion->slug]);
    }

    public function show($slug){

      $discussion = Discussion::where('slug' , $slug)->first();
      return view('discussions.show')->with('discussion', $discussion);
    }
}
