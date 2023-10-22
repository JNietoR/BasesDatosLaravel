@extends('app')

@section('title', 'Home')
@section('description', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi illum harum placeat ipsum sunt vitae nostrum, soluta consequatur eius earum quaerat fuga, praesentium, cupiditate doloribus sed pariatur obcaecati cumque mollitia!')

@section('content')
@foreach($threads as $thread)
<div class="rounded shadow mb-4 p-4 max-w-4xl hover:bg-gray-200">
    <h2 class="text-2xl mb-4">{{ $thread->title }}</h2>
    <div class="text-xs text-gray-600 flex items-center justify-between">
        <div class="flex gap-4">
            <a href="#" class="flex items-center uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                </svg>
                {{ $thread->category->name }}
            </a>
            <span class="flex gap-2 ">
                @foreach($thread->tags as $tag)
                <a href="#" class="flex items-center capitalize">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                    </svg>

                    {{ $tag->name }}
                </a>
                @endforeach
            </span>
        </div>

        <div>
            <span class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>

                {{ $thread->user->name}}
            </span>
        </div>
    </div>
</div>
@endforeach
{{ $threads->links()}}
@endsection