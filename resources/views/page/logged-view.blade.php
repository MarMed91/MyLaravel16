@extends('layouts.home-layouts')
@section('content')

  <h1>Hello logged user {{ Auth::user()->name }}</h1>
@stop
