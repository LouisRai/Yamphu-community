@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a href="/posts"> <button>Go to Posts</button> </a>
            <a href="/posts/create"> <button>Add new post</button> </a>
            </div>
        </div>
    </div>
</div>
@endsection
