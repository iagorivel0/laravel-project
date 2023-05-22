@extends('layouts.main')

@section('title', 'HDC Events')

  @foreach ($events as $event)
      <p>{{ $event->title }} -- {{ $event->description }}</p>
  @endforeach

@section('content')

@endsection
