@extends('layout')

@section('content')
<h1>mz page</h1>
<ul>
@foreach($tasks as $task)
    <li>{{ $task }}</li>
@endforeach
</ul>
@endsection
