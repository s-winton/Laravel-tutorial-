@extends('layouts.app')

@section('content')
   <P>Edit</P>

    <form method="POST" action="/todos/{{ $post->id }}">
    
        @method('PUT')

        @csrf
    
        <label for="title">Title: </label>
        <input id="title" name="title" value="{{ $post->title }}">

        <br>
        <label for="body">Body: </label>
        <textarea id="content" name="body">{{ $post->body }}</textarea>
        <br>
        <button>update</button>

        <button><a href="/click_delete/{{ $post->id }}">Delete</a></button>
 
    </form>

    
@endsection