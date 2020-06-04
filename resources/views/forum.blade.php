@extends('layouts.app')

@section('content')
  @foreach($discussions as $d)
            <div class="panel panel-default">
                <div class="panel-heading">
                  <img src="{{$d->user->avatar}}" alt="" width="40px" height="40px">
                  <span>{{$d->user->name}}</span>
                  <a href="{{route('discussion',['slug'=> $d->slug])}}" class="btn btn-default pull-right"> View</a>
                </div>

                <div class="panel-body">
                  <h5 >
                    {{ $d->title}}
                  </h5>
                  <h6 >
                    {{ str_limit($d->content, 50)}}
                  </h6>

                </div>
                <div class="panel-footer">
                  <h6>
                    {{ $d->replies->count()}} Replies
                  </h6>
                </div>
            </div>
  @endforeach

  <div class="text-center">
    {{$discussions->links()}}

  </div>
@endsection
