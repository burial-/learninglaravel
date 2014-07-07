@extends('layouts.default')

@section('header')
	<title>Task: {{ $task->title }}</title>
@stop

@section('content')
	
	<h3>Task: {{ $task->title }}</h3>
	<article> {{ $task->body }} </article>

	<p> {{ link_to(URL::previous(), 'Go Back') }} </p>

@stop