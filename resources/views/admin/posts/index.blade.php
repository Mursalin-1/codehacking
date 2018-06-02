@extends('layouts.admin')

@section('content')
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
            <th>User</th>
            <th>Category ID</th>
            <th>Photo Id</th>
            <th>Created at</th>
            <th>Updated at</th>
          </tr>
        </thead>
        <tbody>
          @if($posts)

              @foreach($posts as $post)

                  <tr>
                      <td>{{$post->id}}</td>
                      <td>{{$post->title}}</td>
                      <td>{{$post->body}}</td>
                      <td>{{$post->user->name}}</td>
                      <td>{{$post->category_id}}</td>
                      <td><img width="50" src="{{$post->photo ? $post->photo->path : 'http://placehold.it/400x400'}}" alt=""></td>
                      <td>{{$post->created_at->diffForHumans()}}</td>
                      <td>{{$post->updated_at->diffForHumans()}}</td>
                  </tr>

                  @endforeach

              @endif
        </tbody>
      </table>
    @stop