@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css">
    @endsection

@section('content')
        <h1 class="text-center text-capitalize">upload media</h1>
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open(['action'=>'AdminMediasController@store','method'=>'post','class'=>'dropzone','files'=>true]) !!}





            {!! Form::close() !!}

        </div>

    @endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>
    @endsection