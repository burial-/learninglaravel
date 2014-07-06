@extends('layouts.layout')

@section('header')
<link rel="stylesheet" href="{{asset('assets/css/summernote.css')}}"/>
<title>Edit: {{$post->title}}</title>
@stop

@section('content')
<h2>my jrnl</h2>
{{ Form::open(array('route' => 'posts.update')) }}
<!-- Title Form Input -->
<div class="form-group">
    {{ Form::label('title', 'Title:') }}
    {{ Form::text('title', $post->title, ['class' => 'form-control']) }}
</div>
<!-- Summernote Form Input -->
<div class="form-group">
    {{ Form::label('body', 'Content:') }}
    {{ Form::textarea('body', null, ['id' => 'summernote']) }}
</div>
<!-- Uploading image message -->
<div id="spinner"></div>
<div><p>If you're uploading an image it may take some time to appear, just wait patiently.</p></div>
{{ Form::hidden('_method', 'PUT') }}
{{ Form::hidden('post_id', $id) }}

{{ Form::submit('Save Post', array('class' => 'btn btn-primary pull-left', 'id' => 'form-submit')) }}
{{ Form::close() }}

{{ link_to('posts', 'Go Back', array('class' => 'btn btn-primary pull-right') ) }}
@stop

@section('scripts')
<script src="{{asset('assets/js/summernote.min.js')}}"></script>
<script src="{{asset('assets/js/summercustom.js')}}"></script>
<script>
    $( document ).ready(function() {
        $('#summernote').code('{{$post->body}}');
    });
</script>
@stop