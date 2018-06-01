@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_user'))

        <div class="alert">{{session('deleted_user')}}</div>

        @endif

    <h2>Users</h2>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
          </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td><img width="50" src="{{$user->photo ? $user->photo->path : "http://placehold.it/50x50"}}" alt=""></td>
                <td><a href="{{Route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active == 0 ? 'NOT ACTIVE': 'ACTIVE'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
              </tr>
            @endforeach
        @endif
        </tbody>
      </table>
    @endsection