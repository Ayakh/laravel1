@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">POSTS</div>

                    <div class="panel-body">
                        @foreach($post as $post)
                            <h1>  {{$post->body}}</h1>
                            <h2>  {{$post->media}}</h2>


                            </a>

                        @endforeach
                        <div class="comment">
                        @foreach($comments as $comment )

                                <h4>  {{$comment->body}}</h4>

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
