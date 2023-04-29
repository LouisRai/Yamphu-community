@extends('layouts.app')

@section('content')
    <form action='/profile' method='POST'>
        @csrf
        <h1>Create you post</h1>
        <h1><label for="uId" type="text" placeholder="{{ $uId }}" required>You are posting as {{ $uName }}</label></h1>
        <label for="title">Post title</label>
        <input type="text" id="title" name="title" placeholder="Enter title..." required>

        <label for="description">About your post</label>
        <textarea id="description" name="content" rows="5" placeholder="Enter description..." required></textarea>

        <button type="submit">Post</button>
    </form>
    @endsection