@extends('layouts.admin')

@section('content')
    <h2>Create User</h2>

    {!! Form::open(['method'=>'POST', 'action'=>'adminUsersController@store','files'=>true]) !!}

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
        {!! Form::text('password', null,['class'=>'form-control']) !!}

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

        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@include('includes/showInputErrors')


@endsection