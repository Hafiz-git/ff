@extends('layouts.main')


@section('content')
<div>
    <div>
        <h3>
            {{ $guitar['name'] }}
        </h3>
            <ul>
                <li>
                    Made by: {{ $guitar['brand']}}
                </li>
            </ul>
    </div>
</div>

@endsection
