@extends('app')

@section('title', 'Home')
@section('description', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi illum harum placeat ipsum sunt vitae nostrum, soluta consequatur eius earum quaerat fuga, praesentium, cupiditate doloribus sed pariatur obcaecati cumque mollitia!')

@section('content')
    @foreach($threads as $thread)

        @include('_item')
        
    @endforeach

    {{ $threads->links()}}
@endsection