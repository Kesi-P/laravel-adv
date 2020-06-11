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

      <div class="col-md-12">
      @foreach ($discussion->replies as $reply)

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


      @endforeach
      <div class="panel panel-default">
        <div class="panel-heading">
          <img src="{{$reply->user->avatar}}" alt="" width="40px" height="40px">
          <span>{{$reply->user->name}},<b> {{$reply->created_at->diffForHumans()}}</b></span>
        </div>

        <div class="panel-body">
          <form action="{{ route('discussion.reply' ,['id' => $discussion->id])}}" method="post">
            {{ csrf_field()}}
            <div class="form-group">
              <label for="reply">Leave a reply</label>
              <textarea name="content" rows="8" cols="80" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn pull-right" name="button">Reply</button>
            </div>
          </form>

        </div>
      </div>
</div>


@endsection
