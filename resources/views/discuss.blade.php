@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading text-center">Create a new discuss</div>

                <div class="panel-body">
                  <form class="" action="{{ route('discussions.store')}}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="content">Title</label>
                      <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="channel"> Choose a channel</label>
                      <select class="form-control" id="channel_id" name="channel_id">
                        @foreach($channels as $channel)
                          <option value="{{$channel->id}}">{{$channel->title}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="content">Question ?</label>
                      <textarea name="content" id="content" rows="8" cols="80" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-success pull-right" name="button">Create discussion</button>
                    </div>
                  </form>
                </div>
            </div>

@endsection
