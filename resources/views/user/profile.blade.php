@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @foreach ($posts as $post)
                @if ($post->user_id == $uId)
                <div class="card-header">{{$post->title}}</div>

                <div class="card-body">
                    {{$post->content}}
                    <br>
                </div>
                @endif
            @endforeach
            </div>
        <a href="/posts/create"> <button>Add new post</button> </a>
        </div>
    </div>
</div>
@endsection
