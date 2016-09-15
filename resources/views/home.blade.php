@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">POSTS</div>

                <div class="panel-body">
                    @foreach($posts as $post)
                           <h1>  {{$post->body}}</h1>
                           <h1>  {{$post->media}}</h1>
                     <a href="post/{{ $post->id }}">  <p> {{ $post->created_at }} </p>


                     </a>

                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
