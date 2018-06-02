@extends('layouts.admin')

@section('content')
    <h1>Create Posts</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'adminPostsController@store', 'files'=>true]) !!}

        <div class="row">
            <div class="form-group">

                {!! Form::label('title', 'TItle:') !!}
                {!! Form::text('title', null,['class'=>'form-control']) !!}

            </div>
            <div class="form-group">

                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id',[''=>'Options'] + $categories, null,['class'=>'form-control']) !!}

            </div>
            <div class="form-group">

                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

            </div>
            <div class="form-group">

                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body', null,['class'=>'form-control','row'=>'3']) !!}

            </div>
            <div class="form-group">

                {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}

            </div>
        </div>

        {!! Form::close() !!}
    <div class="error">

        @include('includes.showInputErrors')

    </div>

@stop