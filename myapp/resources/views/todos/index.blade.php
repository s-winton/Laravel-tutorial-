@extends('layouts.app')

@section('content')
   <P>Todos</P>

   @foreach ($posts as $post)
       
      <h2>{{ $post->title }}</h2>

      <p>{{ $post->body }}</p>
   @endforeach

@endsection