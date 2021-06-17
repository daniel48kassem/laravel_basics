@extends('layouts.app')


@section('content')

    {!! Form::open(['method'=>'POST','action'=>'PostsController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
{{--        <br>--}}
{{--        {!! Form::label('content','content:') !!}--}}
{{--        {!! Form::text('content',null,['class'=>'form-control']) !!}--}}
    </div>

    <div class="form-group">
        {!! Form::file('file',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create post',['class'=>'btn btn-primary']) !!}
    </div>

{{--        {!!csrf_field()!!}--}}
{{--        <input type="text" name="title" placeholder="Enter title">--}}

{{--        <input type="submit" name="submit">--}}

{{--    </form>--}}

{!! Form::close() !!}




@endsection