@extends('layouts.app')

@section('content')
   <P>Submit new post!</P>

    <form method="POST" action="/todos">

        @csrf
    
        <label for="title">Title: </label>
        <input id="title" name="title">

        <br>
        <label for="body">Body: </label>
        <textarea id="content" name="body"></textarea>
        <br>
        <button>Post</button>
    </form>

@endsection