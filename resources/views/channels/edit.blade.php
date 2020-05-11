@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Channel</div>

                <div class="panel-body">

                <form class="" action="{{ route('channel.update', ['channel' => $channel->id]) }}" method="post">
                  {{ csrf_field()}}
                  {{ method_field('PUT') }}
                  <div class="form-group">
                    <input type="text" name="channel" class="form-control" value="{{$channel->title}}" placeholder="{{$channel->title}}">

                  </div>

                  <div class="form-group">
                    <div class="text-center">
                      <button class="btn-success" type="submit">
                        Save channel
                      </button>

                    </div>
                  </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
