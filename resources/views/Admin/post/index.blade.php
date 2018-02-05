@extends('layouts.admin')



@section('content')

    <h1 class="text-center">All Posts</h1>

    @if($posts)

        <table class="table table-responsive table-hover table-striped">

                <tr>
                    <th>Post Id</th>
                    <th>User </th>
                    <th>Photo</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><a href="{{route ('posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
                    <td><img height="200px" width="200px" class="img-responsive" src="{{$post->photo ? $post->photo->file : ''}}" alt="No User Photo"></td>
                    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                    <td>{{$post->post_title}}</td>
                    <td>{{$post->post_content}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>

                </tr>

                @endforeach
            </table>


        @endif




    @endsection