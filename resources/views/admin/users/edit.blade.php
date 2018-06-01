@extends('layouts.admin')

@section('content')
    <h2>Edit User</h2>

    <div class="row">
        <div class="col-md-3 col-sm-12">
            <img src="{{$user->photo ? $user->photo->path : 'http://placehold.it/400x400'}}" alt="" class="img-responsive">
        </div>
        <div class="col-md-9">
            {!! Form::model($user,['method'=>'PATCH', 'action'=>['adminUsersController@update',$user->id],'files'=>true]) !!}

            <div class="form-group">

                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null,['class'=>'form-control']) !!}

            </div>
            <div class="form-group">

                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', null,['class'=>'form-control']) !!}

            </div>
            <div class="form-group">

                {!! Form::label('password', 'Password:') !!}
                {!! Form::text('password','',['class'=>'form-control']) !!}

            </div>
            <div class="form-group">

                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id',[''=>'Choose Options'] + $roles, null,['class'=>'form-control']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Upload:') !!}
                {!! Form::file('photo_id', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">

                {!! Form::submit('Update',['class'=>'btn btn-primary']) !!}

            </div>

            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">

            {!! Form::open(['method'=>'DELETE', 'action'=>['adminUsersController@destroy',$user->id]]) !!}

                <div>

                    {!! Form::submit('Delete User',['class'=>'btn btn-danger']) !!}

                </div>

                {!! Form::close() !!}

        </div>

    </div>

    <div class="row">@include('includes/showInputErrors')</div>



@endsection