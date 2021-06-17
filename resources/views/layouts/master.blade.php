<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
{{--    <link rel="stylesheet" href="{{URL::to('src/css/bootstrap.css')}}">--}}
    <link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">
</head>
<body>
    @include('includes.header')
    <div class="container">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-1.12.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>--}}
    <script src="{{URL::to('src/js/app.js')}}"></script>

</body>
</html>
mix.setPublicPath('public')
   .js('resources/assets/js/libs/blog-post.js', 'public/js')
   .js('resources/assets/js/libs/boostrap.js', 'public/js')
   .js('resources/assets/js/libs/bootstrap.min.js', 'public/js')
   .js('resources/assets/js/libs/font-awesome.js', 'public/js')
   .js('resources/assets/js/libs/metisMenu.js', 'public/js')
   .js('resources/assets/js/libs/sb-admin-2.js', 'public/js')
   .js('resources/assets/js/libs/styles.js', 'public/js')
   
   .css('resources/asssets/css/libs/blog-post.css', 'public/css')
   .css('resources/asssets/css/libs/boostrap.css', 'public/css')
   .css('resources/asssets/css/libs/bootstrap.min.css', 'public/css')
   .css('resources/asssets/css/libs/font-awesome.css', 'public/css')
   .css('resources/asssets/css/libs/metisMenu.css', 'public/css')
   .css('resources/asssets/css/libs/sb-admin-2.css', 'public/css')
   .css('resources/asssets/css/libs/styles.css', 'public/css')
   
   
    mix.css([
    'resources/asssets/css/libs/blog-post.css'
   'resources/asssets/css/libs/boostrap.css',
   'resources/asssets/css/libs/bootstrap.min.css',
   'resources/asssets/css/libs/font-awesome.css', 
   'resources/asssets/css/libs/metisMenu.css', 
   'resources/asssets/css/libs/sb-admin-2.css',
   'resources/asssets/css/libs/styles.css'
	
	], 'public/css/libs.css');
	
	mix.js([
'resources/asssets/js/libs/boostrap.js',
'resources/assets/js/libs/styles.js',
'resources/assets/js/libs/sb-admin-2.js',
'resources/assets/js/libs/metisMenu.js',
'resources/assets/js/libs/font-awesome.js',
'resources/assets/js/libs/bootstrap.min.js'


], 'public/js/libs.js');