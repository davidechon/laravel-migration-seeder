@extends('layouts.default')

@section('pageTitle', 'Dettaglio Viaggio')

@section('mainContent')
{{-- @dump($travels) --}}
<h1 class="text-center">{{$travel->title}}</h1>

@endsection

  
  