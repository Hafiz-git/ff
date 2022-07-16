@extends('layouts.main')

@section('title', 'Guitar')
@section('content')
<div>

    @if (count($guitars) > 0)

    @foreach ($guitars as $guitar)
    <div>
        <h3>
            <a href="{{ route('guitars.show', ['guitar' => $guitar['id']])}}">{{ $guitar['name'] }}</a>
        </h3>
            <ul>
                <li>
                    Made by: {{ $guitar['brand']}}
                </li>
            </ul>
    </div>

    @endforeach
    @else
        <h1>There is no guitar</h1>
    @endif

    <div>
        User Input: {{ $userInput }}
    </div>
</div>

@endsection
