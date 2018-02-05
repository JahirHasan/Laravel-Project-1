@extends('layouts.admin')



@section('content')

    <h1 class="text-center">Edit Categories </h1>


    <div class="col-md-6 ">
        {!! Form::model($categories,['action'=>['AdminCategoryController@update',$categories->id],'method'=>'PATCH']) !!}


        <div class="form-group">

            {!! Form::label('name','Category Name:  ') !!}
            {!! Form::text('name',null,['class'=>'form-control']); !!}
            {{$errors->first('name')}}
        </div>




        {!! Form::submit('update',['class'=>'btn btn-success col-md-3']) !!}


        {!! Form::close() !!}


        {!! Form::open(['action'=>['AdminCategoryController@destroy',$categories->id],'method'=>'DELETE']) !!}


        <div class="form-group">
            {!! Form::submit('Delete Category',['class'=>'btn btn-danger col-md-4']) !!}

        </div>


        {!! Form::close() !!}

    </div>




@endsection