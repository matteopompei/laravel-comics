@extends('layouts.app')

@section('main-content')
  <div class="content">
    <h2>Current Series</h2>
    @foreach ($comics as $key => $value)
      <div class="comic">
        <img src="{{ $value['thumb'] }}" alt="{{ $value['title'] }}" />
        <h5>{{ $value['title'] }}</h5>
      </div>
    @endforeach
  </div>
  <a href="#" class="load-more">Load more</a>
@endsection
