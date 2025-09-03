@extends('adminlte::page')

@section('title', 'Editar campaña')

@section('content_header')
  <h1>Editar campaña</h1>
@stop

@section('content')
  @include('campaigns.partials.form', [
    'route' => route('campaigns.update', $campaign),
    'method' => 'PUT',
    'campaign' => $campaign
  ])
@stop
