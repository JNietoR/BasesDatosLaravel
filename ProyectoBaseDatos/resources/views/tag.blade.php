@extends('app')

@section('title', $tag)
@section('description', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi illum harum placeat ipsum sunt vitae nostrum, soluta consequatur eius earum quaerat fuga, praesentium, cupiditate doloribus sed pariatur obcaecati cumque mollitia!')

@section('content')
    {{ $tag }}
@endsection