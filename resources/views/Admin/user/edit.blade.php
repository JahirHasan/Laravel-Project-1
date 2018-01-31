@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">Edit User</h1>
            
            <div class="col-md-3">
                <img src="{{$users->photo ? $users->photo->file : ''}}" alt="Here is a image" class="img-responsive img-rounded">
                
            </div>
            <div class="col-md-9">
                
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
                    {!! Form::select('is_active',array('1'=>'Active','0'=>'Inactive'),null,['class'=>'form-control']); !!}
                    {{$errors->first('is_active')}}
                </div>


                <div class="form-group">
                    {!! Form::file('photo_id',['class'=>'form-control']) !!}

                </div>

                <div class="form-group">
                    {!! Form::submit('Update User',['class'=>'btn btn-success col-md-4']) !!}
                </div>



                {!! Form::close() !!}




                {!! Form::open(['action'=>['AdminUsersController@destroy',$users->id],'method'=>'DELETE']) !!}

                    <div class="form-group">
                        {!! Form::submit('Delete User',['class'=>'btn btn-danger col-md-4']) !!}

                    </div>



                    {!! Form::close() !!}
                
                
                
                
            </div>
        </div>
        
    </div>
    


@endsection