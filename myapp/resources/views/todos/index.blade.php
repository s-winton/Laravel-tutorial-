@extends('layouts.app')

@section('content')
   <P>Todos</P>

   @foreach ($posts as $post)
       
      <a href="/todos/{{ $post->id }}/edit">{{ $post->title }}</a>

      <p>{{ $post->body }}</p>
   @endforeach
@endsection