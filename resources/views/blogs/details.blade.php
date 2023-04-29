@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @foreach ($posts as $post)
                <div class="card-header">{{$post->title}} Posted By {{ $post->user->name }}</div>

                <div class="card-body">
                    {{$post->content}}
                    <br>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
