@extends('layouts.admin')



@section('content')

    <h1 class="text-center">Create Posts </h1>

    <div class="col-md-6 col-md-offset-3 post_create">
        {!! Form::open(['action'=>'AdminPostsController@store','method'=>'post','files'=>true]) !!}


        <div class="form-group">

            {!! Form::label('post_title','Title:  ') !!}
            {!! Form::text('post_title',null,['class'=>'form-control']); !!}
            {{$errors->first('post_title')}}
        </div>

        <div class="form-group">

            {!! Form::label('category_id','Category:  ') !!}
            {!! Form::select('category_id',array(''=>'Choose Category')+$categories,null,['class'=>'form-control']); !!}
            {{$errors->first('category_id')}}
        </div>

        <div class="form-group">

            {!! Form::label('photo_id','Photo:  ') !!}
            {!! Form::file('photo_id',['class'=>'form-control']); !!}
            {{$errors->first('photo_id')}}
        </div>


        <div class="form-group">
            {!! Form::label('post_content','Content:  ') !!}
            {!! Form::textarea('post_content',null,['class'=>'form-control','row'=>3]); !!}
            {{$errors->first('post_content')}}
        </div>


        {!! Form::submit('submit',['class'=>'btn btn-success']) !!}


        {!! Form::close() !!}
    </div>




@endsection