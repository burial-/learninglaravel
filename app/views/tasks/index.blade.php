@extends('layouts.default')

@section('header')
<title>Tasks</title>
@stop

@section('content')

<h1>All Tasks</h1>
<ul class="list-group">
    @foreach ($tasks as $task)
    <li class="list-group-item">
        {{ gravatar_tag($task->user->email) }}
        {{ link_to("tasks/$task->id", $task->title) }}

    </li>
    @endforeach
</ul>
@stop