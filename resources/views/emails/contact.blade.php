@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
        'heading' => 'Hello, From YeceApp!',
        'level' => 'h2'
    ])

    @include('beautymail::templates.ark.contentStart')

    <h4 class="secondary">An Guest named <strong>{{$name}}</strong> leave you this Message:</h4>
    <p>{{$msg}}</p>

    @include('beautymail::templates.ark.contentEnd')

@stop