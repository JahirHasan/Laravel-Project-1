@extends('layouts.admin')



@section('content')



    <div class="col-md-6 post_create">

        <h1 class="text-left"> Create Categories</h1>

        {!! Form::open(['action'=>'AdminCategoryController@store','method'=>'post']) !!}


        <div class="form-group">

            {!! Form::label('name','Category Name:  ') !!}
            {!! Form::text('name',null,['class'=>'form-control']); !!}
            {{$errors->first('name')}}
        </div>


        {!! Form::submit('create',['class'=>'btn btn-success']) !!}


        {!! Form::close() !!}
    </div>

    <div class="col-md-6">
        <h1 class="text-center">All Categories</h1>

        @if($categories)

            <table class="table table-responsive table-hover table-striped">

                <tr>
                    <th>Category Id</th>
                    <th>Category Name</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>

                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('categories.edit',$category->id)}}">{{$category->name}}</a></td>
                        <td>{{$category->created_at->diffForHumans()}}</td>
                        <td>{{$category->updated_at->diffForHumans()}}</td>


                    </tr>

                @endforeach


            </table>




        @endif

    </div>

@endsection