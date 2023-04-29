@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @foreach ($posts as $post)
                <div class="card-header">{{$post->title}}</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    <!-- {{ Auth::user()->name }}{{ __(' you are logged in!') }} -->
                    {{$post->content}}
                    <br>
                </div>
            @endforeach
            </div>
        <a href="/home/create"> <button>Add new post</button> </a>
        </div>
    </div>
</div>
@endsection
