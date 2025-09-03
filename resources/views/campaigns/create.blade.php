@extends('adminlte::page')

@section('title', 'Nueva campaña')

@section('content_header')
  <h1>Nueva campaña</h1>
@stop

@section('content')
  @include('campaigns.partials.form', [
    'route' => route('campaigns.store'),
    'method' => 'POST',
    'campaign' => null
  ])
@stop
