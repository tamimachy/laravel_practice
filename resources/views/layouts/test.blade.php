@extends('layouts.main')

@section('content')

This is Test Content

@endsection

@section('variables')

 @php
  $title = 'Test Page';
 @endphp
 <h3>{{$title}}</h3>
@endsection