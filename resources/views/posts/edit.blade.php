@extends('layouts.app')


@section('content')

    <h1>Edit post</h1>

    {!! Form::model($post,['method'=>'PATCH','action'=>['PostsController@update',$post->id]]) !!}
    {!!csrf_field()!!}

    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
        {!! Form::submit('Update Post',['class'=>'btn btn-info']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}
    {!! Form::submit('Delete Post',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}

    {{--    <form method="POST" action="/posts/{{$post->id}}">--}}

{{--        <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">--}}

{{--        <input type="hidden" name="_method" value="PUT">--}}

{{--        <input type="submit" name="submit">--}}
{{--    </form>--}}



@endsection