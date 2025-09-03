@extends('adminlte::page')

@section('title', 'Detalle campaña')

@section('content_header')
  <h1>{{ $campaign->title }}</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      @if($campaign->image_path)
        <img src="{{ asset('storage/'.$campaign->image_path) }}" class="mb-3 d-block" style="max-height:240px;">
      @endif
      <p>{{ $campaign->description }}</p>
      <a href="{{ route('campaigns.index') }}" class="btn btn-light">Volver</a>
    </div>
  </div>
@stop
