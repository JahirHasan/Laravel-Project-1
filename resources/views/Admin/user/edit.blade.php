@extends('layouts.admin')


@section('content')

    <h1 class="text-center">Create User</h1>

    {!! Form::model($users,['action'=>['AdminUsersController@update',$users->id],'method'=>'PATCH','files'=>true]) !!}


    <div class="form-group">

        {!! Form::label('UserName','User Name:  ') !!}
        {!! Form::text('name',null,['class'=>'form-control']); !!}

        {{$errors->first('name')}}

    </div>

    <div class="form-group">

        {!! Form::label('Email','Email:  ') !!}
        {!! Form::email('email',null,['class'=>'form-control']); !!}
        {{$errors->first('email')}}
    </div>

    <div class="form-group">

        {!! Form::label('Password','Password:  ') !!}
        {!! Form::password('password',['class'=>'form-control']); !!}
        {{$errors->first('password')}}
    </div>

    <div class="form-group">

        {!! Form::label('Role','Role:  ') !!}
        {!! Form::select('role_id',$roles,null,['class'=>'form-control']); !!}
        {{$errors->first('role_id')}}
    </div>

    <div class="form-group">

        {!! Form::label('is_active','Is Active:  ') !!}
        {!! Form::select('is_active',array('1'=>'Active','0'=>'Inactive'),$users->is_active,['class'=>'form-control']); !!}
        {{$errors->first('is_active')}}
    </div>


    <div class="form-group">
        {!! Form::file('photo_id',['class'=>'form-control']) !!}

    </div>


    {!! Form::submit('Update User',['class'=>'btn btn-success']) !!}


    {!! Form::close() !!}


@endsection