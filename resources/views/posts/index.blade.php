@extends('layouts.app')


@section('content')
    <ul>
        @foreach($posts as $post)
            <li>{{$post->title}}</li>
            <div class="image-container">
                <img height="50" src="/images/{{$post->path}}" alt="">
            </div>
        @endforeach
    </ul>
    <p>end Of posts today, come back tomorrow</p>
    <div>

        {!! $posts->render() !!}

    </div>
@endsection