
@extends('layouts.admin')


@section('content')

    @if(Session::has('user_deleted'))

        <p class="alert-danger">{{session('user_deleted')}}</p>

        @endif


    <h1 class="text-center">Users Table</h1>

     <table class="table table-responsive table-hover table-striped">

             <tr>
                 <th>User Id</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Role</th>
                 <th>Is_Active</th>
                 <th>Photo</th>
                 <th>Created</th>
                 <th>Updated</th>
             </tr>
         @foreach($users as $user)
             <tr>
                 <td>{{$user->id}}</td>
                 <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                 <td>{{$user->email}}</td>
                 <td>{{$user->role->name}}</td>
                 <td>{{$user->is_active ? 'Active': 'Inactive'}}</td>
                 <td><img height="200px" width="200px" class="img-responsive" src="{{$user->photo ? $user->photo->file : ''}}" alt="No User Photo"></td>
                 <td>{{$user->created_at->diffForHumans()}}</td>
                 <td>{{$user->updated_at->diffForHumans()}}</td>
             </tr>
             @endforeach

         </table>

    @endsection