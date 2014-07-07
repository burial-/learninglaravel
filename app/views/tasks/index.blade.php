@extends('layouts.default')

@section('header')
<title>Tasks</title>
@stop

@section('content')

<div class="pull-left col-md-6">
    <h3>All Tasks</h3>
    <ul class="list-group">
        @foreach ($tasks as $task)
        <li class="list-group-item">
            <a href="/{{ $task->user->username }}/tasks">{{ gravatar_tag($task->user->email) }}</a>
            {{ link_to_task($task) }}
            <div class="pull-right">
                {{ Form::model($task, ['method' => 'PATCH', 'route' => ['tasks.update', $task->id]]) }}
                {{ Form::checkbox('completed') }}
                {{ Form::submit('Update', ['class' => 'btn']) }}
                {{ Form::close() }}
            </div>
        </li>
        @endforeach
    </ul>
    {{ $tasks->links() }}
</div>
<div class="pull-right col-md-6">
    @if (isset($users))
    <h3>Add New Task</h3>
    @include('tasks.partials._form')
    @endif
</div>
@stop