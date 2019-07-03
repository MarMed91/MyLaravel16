@extends('layouts.home-layouts')
@section('content')

  <div class="edit">
    <h1>Send Mail To Admin</h1>
    <form  action="{{ route('send.mail') }}" method="post">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" value="">
      </div>
      <button type="submit" name="button">SEND MAIL</button>
    </form>
  </div>
@stop
