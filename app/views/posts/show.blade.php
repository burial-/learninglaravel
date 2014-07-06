@extends('layouts.layout')

@section('header')
<title>{{ $post->title }}</title>
@stop

@section('content')
<div class="page-header">
    <h1>{{ $post->title }} <small>{{ $post->created_at->toFormattedDateString() }}</small></h1>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <article> {{ $post->body }} </article>
    </div>
</div>
{{ link_to(URL::previous(), 'Go Back', array('class' => 'btn btn-primary pull-right')) }}
{{ link_to("posts/$post->id/edit", 'Edit', array('class' => 'btn btn-primary pull-left')) }}
@stop