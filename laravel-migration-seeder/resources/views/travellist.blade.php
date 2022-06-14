@extends('layouts.default')

@section('pageTitle', 'Lista Viaggi')

@section('mainContent')
{{-- @dump($travels); --}}
<h1 class="text-center">Lista Viaggi <i class="fa-solid fa-globe"></i></h1>
<div class="row">
  @foreach ($travels as $travel)

  <div class="col">
    <a href="{{route('detail', $travel->id)}}">{{$travel->title}}</a>
  </div>
      
  @endforeach
</div>
@endsection

  
  