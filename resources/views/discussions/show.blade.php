@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
      <img src="{{$discussion->user->avatar}}" alt="" width="40px" height="40px">
      <span>{{$discussion->user->name}}</span>

    </div>

    <div class="panel-body">
      <h5 >
        {{ $discussion->title}}
      </h5>
      <h6 >
        {{ $discussion->content}}
      </h6>

    </div>
    <div class="panel-footer">
      <h6>
        {{ $discussion->replies->count()}} Replies
      </h6>
    </div>
    </div>

      @foreach ($discussion->replies as $reply)
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <img src="{{$reply->user->avatar}}" alt="" width="40px" height="40px">
            <span>{{$reply->user->name}},<b> {{$reply->created_at->diffForHumans()}}</b></span>

          </div>

          <div class="panel-body">

            <h6 >
              {{ $reply->content}}
            </h6>

          </div>
        </div>
      </div>

      @endforeach




@endsection
