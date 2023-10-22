@extends('app')

@section('title', $category)
@section('description', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi illum harum placeat ipsum sunt vitae nostrum, soluta consequatur eius earum quaerat fuga, praesentium, cupiditate doloribus sed pariatur obcaecati cumque mollitia!')

@section('content')
    {{ $category }}
@endsection