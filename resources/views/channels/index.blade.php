@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">channels</div>

                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <th>Name</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>

                      @foreach($channels as $channel)
                      <tr>
                        <td>{{ $channel->title}}</td>
                        <td>
                          <a href="{{ route('channel.edit' , ['channel' => $channel->id])}}" class="btn btn-xs btn-info"> Edit</a>
                        </td>
                        <td>
                          <form class="" action="{{ route('channel.destroy' , ['channel' => $channel->id])}}" method="post">
                            {{ csrf_field()}}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                          </form>

                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>

@endsection
