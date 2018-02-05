@extends('layouts.admin')



@section('content')

    <h1 class="text-center">Edit Posts </h1>

    <div class="col-md-3">
        <img src="{{$post->photo ? $post->photo->file: ''}}" class="img-responsive" alt="there is a photo">

    </div>

    <div class="col-md-6 post_create">
        {!! Form::model($post,['action'=>['AdminPostsController@update',$post->id],'method'=>'PATCH','files'=>true]) !!}


        <div class="form-group">

            {!! Form::label('post_title','Title:  ') !!}
            {!! Form::text('post_title',null,['class'=>'form-control']); !!}
            {{$errors->first('post_title')}}
        </div>

        <div class="form-group">

            {!! Form::label('category_id','Category:  ') !!}
            {!! Form::select('category_id',$categories,null,['class'=>'form-control']); !!}
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


        {!! Form::submit('submit',['class'=>'btn btn-success col-md-3']) !!}


        {!! Form::close() !!}


        {!! Form::open(['action'=>['AdminPostsController@destroy',$post->id],'method'=>'DELETE','files'=>true]) !!}


            {!! Form::submit('Delete Post',['class'=>'btn btn-danger col-md-3']) !!}


            {!! Form::close() !!}

    </div>




@endsection