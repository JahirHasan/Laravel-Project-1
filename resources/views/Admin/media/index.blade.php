@extends('layouts.admin')


@section('content')

        <h1 class="text-center text-capitalize">all photos</h1>

        @if(Session::has('photo_deleted'))
            <p class="alert alert-danger">{{session('photo_deleted')}}</p>
        @endif

         <table class="table table-responsive table-hover table-striped">

                 <tr>
                     <th>Photo Id</th>
                     <th>Photo</th>
                     <th>Source</th>
                     <th>Created</th>
                     <th>Updated</th>
                     <th>Action</th>

                 </tr>
             @if($photos)

                 @foreach($photos as $photo)
                     <tr>
                         <td>{{$photo->id}}</td>
                         <td><img class="img-responsive" height="200px" width="200px" src="{{$photo->file ? $photo->file : ''}}" alt="No Photo" /></td>
                         <td>

                             @if($photo->user)

                                {{$photo->user->name}}

                             @elseif($photo->post)

                                 {{$photo->post->post_title}}

                             @else

                                 {{'No Source'}}

                             @endif

                         </td>
                         <td>{{$photo->created_at->diffForHumans()}}</td>
                         <td>{{$photo->updated_at->diffForHumans()}}</td>
                         <td>

                             {!! Form::open(['action'=>['AdminMediasController@destroy',$photo->id],'method'=>'DELETE']) !!}


                                 {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}


                             {!! Form::close() !!}

                         </td>


                     </tr>

                 @endforeach

             @endif

         </table>
@endsection